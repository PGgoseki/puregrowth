<?php
/**
 * エリア別クライアント一覧モーダルの中身（全エリア共通）
 *
 * 使い方:
 *   get_template_part( 'template/modal-area', null, array( 'area' => 'area01' ) );
 *
 * 表示内容は template/data/client-areas.php と
 * クライアントボイス投稿から自動生成されます。
 */

$pg_area_key = isset( $args['area'] ) ? (string) $args['area'] : '';
$pg_groups   = ( '' !== $pg_area_key && function_exists( 'pg_client_area_groups' ) )
	? pg_client_area_groups( $pg_area_key )
	: array();

if ( empty( $pg_groups ) ) {
	return;
}

foreach ( $pg_groups as $pg_pref_name => $pg_clients ) : ?>
	<dl class="c-map-modal__item">
		<dt class="c-map-modal__head"><?php echo esc_html( $pg_pref_name ); ?></dt>
		<dd class="c-map-modal__body">
			<?php foreach ( $pg_clients as $pg_client ) : ?>
				<?php if ( ! empty( $pg_client['nolink'] ) ) : ?>
					<div class="c-map-modal__link --nolink nolink"><?php echo esc_html( $pg_client['name'] ); ?>様</div>
				<?php else : ?>
					<a href="<?php echo esc_url( $pg_client['url'] ); ?>" class="c-map-modal__link"><?php echo esc_html( $pg_client['name'] ); ?>様</a>
				<?php endif; ?>
			<?php endforeach; ?>
		</dd>
	</dl>
<?php endforeach;
