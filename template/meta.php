<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-58G755T');</script>
<!-- End Google Tag Manager -->

<?php if(is_page(array('2218') )): ?>
<!-- KASIKA CONVERSION TAG -->
<script type="text/javascript" src="//panda.kasika.io/tracking_conversion/?pid=95B6A66E147EA223CFF7AFBEDF4265CA&ce=【動的に生成】&cn=【動的に生成】&cnf=【動的に生成】&cp=【動的に生成】&co=【会社名】&zip=【郵便番号】&add=【住所】&enc=UTF-8&csid=cv_seminor"></script>
<!-- KASIKA CONVERSION TAG -->
<?php endif; ?>

<!-- KASIKA TRACKING CODE -->
<script type="text/javascript" src="//panda.kasika.io/tag-manager/?pid=95B6A66E147EA223CFF7AFBEDF4265CA"></script>
<!-- KASIKA TRACKING CODE -->

<?php 
    $title_after = ' | '.get_bloginfo('name');
    $title =  get_field('meta_title') ? get_field('meta_title'): get_the_title().$title_after;
    $description = get_field('meta_desc') ? get_field('meta_desc'): get_bloginfo('description');
    $ogp = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : esc_url(get_template_directory_uri()).'/img/OGP.png';
    $canonical = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if(is_front_page()) {
      $page_id = get_page_by_path('top')->ID;
      if($page_id) {
        $title =  get_field('meta_title',$page_id ) ? get_field('meta_title',$page_id ): get_the_title().$title_after;
        $description = get_field('meta_desc',$page_id) ? get_field('meta_desc',$page_id): get_bloginfo('description');
        if(get_field('meta_noindex',$page_id)) {
          echo '<meta name="robots" content="noindex" />';
        }
      }
    } elseif(is_tag()) {
      $term_obj = get_queried_object();
      $term_name = $term_obj->name;
      $term_id = $term_obj->term_id;
      $description = 'ピュアグロース株式会社の'. $term_name . 'に関する記事の一覧ページです。。';
      echo '<meta name="robots" content="noindex" />';
    }elseif (is_post_type_archive()) {
      $post_type = get_post_type_object(get_query_var('post_type'));
      if ($post_type) {
          $post_type_name = $post_type->labels->name;
          $title = '' . $post_type_name . '一覧' . $title_after;
          $description = 'ピュアグロース株式会社の「' . $post_type_name . '」に関する投稿記事の一覧ページです。';
      }
    } elseif(is_category() || is_archive()) {
      $term_obj = get_queried_object();
      $term_name = $term_obj->name;
      $term_id = $term_obj->term_id;
      $title =  get_field('meta_title','category_'.$term_id ) ? get_field('meta_title','category_'.$term_id ) : '「'.$term_name.'」の投稿一覧'.$title_after;
      $description = get_field('meta_desc','category'.'_'.$term_id ) ? get_field('meta_desc','category'.'_'.$term_id ) : 'ピュアグロース株式会社の投稿記事の一覧ページです。セミナー情報やメンバー紹介など様々なタグに分けて記事を掲載しております。';
      if(get_field('meta_noindex','category'.'_'.$term_id)) {
        echo '<meta name="robots" content="noindex" />';
      }
    } elseif(is_single()) {
      $description = get_field('meta_desc') ? get_field('meta_desc') : get_the_excerpt();
      if(get_field('meta_noindex')) {
        echo '<meta name="robots" content="noindex" />';
      }
    } elseif(is_404()) {
      $title =  '404'.$title_after;
      $description = 'ページが見つかりませんでした';
    } else {
      if(get_field('meta_noindex')) {
        echo '<meta name="robots" content="noindex" />';
      }
    }
    ?>
<title><?php echo $title; ?></title>
<meta name="title" content="<?php echo $title; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri()?>/img/favicon.ico" sizes="180x180">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicon.ico"
	sizes="192x192">
<!-- OGP -->
<meta property="og:url" content="<?php echo $canonical; ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:image" content="<?php echo $ogp; ?>" />
<?php if(is_front_page() || is_page(array('about')) || is_single()): ?>
<script type="application/ld+json"> <?php cst_structured_data_application_ld_json(); ?> </script>
<?php endif; ?>