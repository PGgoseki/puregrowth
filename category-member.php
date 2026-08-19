<?php get_header(); ?>

<?php
$query_object = get_queried_object();
$page_name    = isset($query_object->name) ? $query_object->name : '';
$cat_slug     = isset($query_object->slug) ? $query_object->slug : '';
$paged        = max(1, get_query_var('paged'), get_query_var('page'));
$per_page     = 14;

/**
 * 役職ターム一覧を取得
 * 管理画面の並び順を使いたい場合は orderby を調整
 */
$role_terms = get_terms(array(
    'taxonomy'   => 'member_role',
    'hide_empty' => false,
    'orderby'    => 'term_id',
    'order'      => 'ASC',
));

$role_order_map = array();
$role_label_map = array();

if (! empty($role_terms) && ! is_wp_error($role_terms)) {
    $order_index = 1;
    foreach ($role_terms as $term) {
        $role_order_map[$term->slug] = $order_index;
        $role_label_map[$term->slug] = $term->name;
        $order_index++;
    }
}

/**
 * メンバーカテゴリーの全投稿IDを取得
 */
$all_member_ids = get_posts(array(
    'post_type'        => 'post',
    'post_status'      => 'publish',
    'numberposts'      => -1,
    'category_name'    => $cat_slug,
    'fields'           => 'ids',
    'orderby'          => 'date',
    'order'            => 'DESC',
    'suppress_filters' => false,
    'meta_query'       => array(
        array(
            'key'     => 'meta_noindex',
            'value'   => '0',
            'compare' => '=',
            'type'    => 'NUMERIC',
        )
    )
));

/**
 * 投稿を「全体で役職順」に並べ替える
 * 同じ役職内は日付降順
 * 未設定は最後に「その他」
 */
$sorted_members = array();

if (! empty($all_member_ids)) {
    foreach ($all_member_ids as $post_id) {
        $terms = get_the_terms($post_id, 'member_role');

        if (! empty($terms) && ! is_wp_error($terms)) {
            $primary_term = array_shift($terms);
            $role_slug    = $primary_term->slug;
            $role_label   = $primary_term->name;
            $role_order   = isset($role_order_map[$role_slug]) ? $role_order_map[$role_slug] : 999;
        } else {
            $role_slug    = 'other';
            $role_label   = 'その他';
            $role_order   = 9999;
        }

        $sorted_members[] = array(
            'post_id'     => $post_id,
            'role_slug'   => $role_slug,
            'role_label'  => $role_label,
            'role_order'  => $role_order,
            'member_order' => (int) get_field('member_order', $post_id),
        );
    }

    usort($sorted_members, function ($a, $b) {
        if ($a['role_order'] !== $b['role_order']) {
            return $a['role_order'] <=> $b['role_order'];
        }

        // 役職内の順番（これが管理画面順）
        return $a['member_order'] <=> $b['member_order'];
    });
}

/**
 * 役職グループを尊重した手動ページネーション
 * 各ページは最低 $per_page 件表示するが、$per_page を超えても
 * 現在の役職グループが終わるまで同じページに表示し続ける
 */
$pages_data        = array();
$current_page_data = array();
$total_posts       = count($sorted_members);

foreach ($sorted_members as $i => $member) {
    $current_page_data[] = $member;

    if (count($current_page_data) >= $per_page) {
        $next_role = ($i + 1 < $total_posts) ? $sorted_members[$i + 1]['role_slug'] : null;
        // 次の人の役職が違う、もしくは末尾ならページを確定
        if ($next_role === null || $next_role !== $member['role_slug']) {
            $pages_data[]      = $current_page_data;
            $current_page_data = array();
        }
    }
}
if (!empty($current_page_data)) {
    $pages_data[] = $current_page_data;
}

$total_pages = max(1, count($pages_data));

if ($paged > $total_pages) {
    $paged = $total_pages;
}

$current_members = isset($pages_data[$paged - 1]) ? $pages_data[$paged - 1] : array();

/**
 * 今のページ12件だけを役職ごとにグルーピング
 */
$grouped_posts = array();

if (! empty($current_members)) {
    foreach ($current_members as $member) {
        $group_key = $member['role_slug'];

        if (! isset($grouped_posts[$group_key])) {
            $grouped_posts[$group_key] = array(
                'label' => $member['role_label'],
                'order' => $member['role_order'],
                'posts' => array(),
            );
        }

        $grouped_posts[$group_key]['posts'][] = get_post($member['post_id']);
    }
}
?>

<div class="lower-mv --articles">
    <div class="wrap">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <div class="breadcrumbs__inner inner">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>
        </div>
        <div class="lower-mv__inner inner">
            <div class="lower-mv__txt">
                <div class="lower-mv__heading english">Articles</div>
                <h1 class="lower-mv__ttl">
                    <span class="lower-mv__ttl-ja"><?php echo esc_html($page_name); ?>の一覧</span>
                </h1>
            </div>
        </div>
    </div>
</div>

<section class="l-articles section member-archive">
    <div class="l-articles__inner inner">

        <?php
        /**
         * 表示行のグルーピング
         * 隣接する役職グループの合計人数が3名以下なら横並び（merged）にする
         *
         * ペアリングは「右から左」へ走査する。
         * 理由：例えば [単独役職(1), チーフ(2), ディレクター(1)] のように
         * 単独役職の直後に2+1のペアが続く場合、左から走査すると
         * 単独役職+チーフが先にペアになってしまい、ディレクターが孤立する。
         * 右から走査すれば、チーフ+ディレクター(2+1=3)が優先的にマージされる。
         */
        $display_rows = array();
        if (! empty($grouped_posts)) {
            $groups_list = array_values($grouped_posts);
            $gn = count($groups_list);
            $merge_with_next = array_fill(0, $gn, false);
            $paired          = array_fill(0, $gn, false);

            // 右から左へ greedy にペアリング
            for ($i = $gn - 2; $i >= 0; $i--) {
                if ($paired[$i] || $paired[$i + 1]) {
                    continue;
                }
                $sum = count($groups_list[$i]['posts']) + count($groups_list[$i + 1]['posts']);
                if ($sum <= 3) {
                    $merge_with_next[$i] = true;
                    $paired[$i]          = true;
                    $paired[$i + 1]      = true;
                }
            }

            // 結果を表示順（左→右）に並べる
            $i = 0;
            while ($i < $gn) {
                if ($merge_with_next[$i]) {
                    $display_rows[] = array(
                        'merged' => true,
                        'groups' => array($groups_list[$i], $groups_list[$i + 1]),
                    );
                    $i += 2;
                } else {
                    $display_rows[] = array(
                        'merged' => false,
                        'groups' => array($groups_list[$i]),
                    );
                    $i += 1;
                }
            }
        }
        ?>

        <?php if (! empty($display_rows)) : ?>
            <?php foreach ($display_rows as $row) : ?>
                <?php if ($row['merged']) : ?>
                <div class="member-role-row --merged">
                <?php endif; ?>
                <?php foreach ($row['groups'] as $group) : ?>
                <div class="member-role-section" data-member-count="<?php echo (int) count($group['posts']); ?>">
                    <h3 class="member-role-title"><?php echo esc_html($group['label']); ?></h3>

                    <div class="swiper-container c-card --list c-card1">
                        <div class="swiper-wrapper c-card__list">
                            <?php foreach ($group['posts'] as $post) : ?>
                                <?php setup_postdata($post); ?>

                                <?php
                                $tag_class = '';
                                $tags = get_the_tags(get_the_ID());
                                if ($tags) {
                                    $tag_class = ' tag_on';
                                }
                                ?>

                                <div class="swiper-slide c-card__item <?php echo esc_attr($tag_class); ?>">
                                    <article>
                                        <a href="<?php the_permalink(); ?>" class="c-card__item-link">
                                            <div class="c-card__item-wrap">
                                                <div class="c-card__item-pic img">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <picture>
                                                            <source media="(max-width: 599.98px)" srcset="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>">
                                                            <img class="archive__entry-thumbnail-img lazyload" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true)); ?>">
                                                        </picture>
                                                    <?php else : ?>
                                                        <picture>
                                                            <source media="(max-width: 599.98px)" srcset="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>">
                                                            <img class="archive__entry-thumbnail-img" src="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>" alt="<?php echo esc_attr(get_post_meta(185, '_wp_attachment_image_alt', true)); ?>">
                                                        </picture>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="c-card__item-headline">
                                                    <div class="c-card__item-info">
                                                        <div class="time english"><?php the_time('Y.m.d'); ?></div>
                                                        <div class="time english update"><?php the_modified_date('Y.m.d'); ?></div>
                                                    </div>
                                                    <div class="c-card__item-ttl"><?php my_get_title(21); ?></div>
                                                    <div class="c-card__arrow">詳しく見る</div>
                                                </div>
                                            </div>

                                            <div class="c-card__item-body more">
                                                <div class="c-card__item-headline2">
                                                    <div class="c-card__item-info">
                                                        <div class="time english"><?php the_time('Y.m.d'); ?></div>
                                                    </div>
                                                    <div class="c-card__item-ttl"><?php my_get_title(21); ?></div>
                                                </div>
                                                <div class="c-card__arrow">詳しく見る</div>
                                            </div>
                                        </a>

                                        <?php if ($tags) : ?>
                                            <?php $counter = 1; ?>
                                            <ul class="c-card__item-tag-list only-pc">
                                                <?php foreach ($tags as $tag) : ?>
                                                    <?php if ($counter < 5) : ?>
                                                        <li class="c-card__item-tag-item">
                                                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="c-card__item-tag-link">
                                                                <?php echo esc_html($tag->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php $counter++; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </article>
                                </div>

                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php if ($row['merged']) : ?>
                </div><!-- /.member-role-row.--merged -->
                <?php endif; ?>
            <?php endforeach; ?>

            <?php if ($total_pages > 1) : ?>
                <?php
                // ページネーション関数が参照する $wp_query->max_num_pages を、手動計算した $total_pages に合わせる
                global $wp_query;
                $wp_query->max_num_pages = $total_pages;
                my_custom_pagination($cat_slug, null, true, $total_pages);
                ?>
            <?php endif; ?>

        <?php else : ?>
            <p>該当するメンバーがありません。</p>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>