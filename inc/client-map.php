<?php
/**
 * クライアント一覧（トップページ日本地図）データ層
 * -----------------------------------------------------------------------------
 * エリア／都道府県のマスタは template/data/client-areas.php が唯一の正です。
 * 表示されるクライアントは「クライアントボイス（category: client-voice）」の
 * 投稿に紐づく ACF フィールド voice_region から自動で集計されます。
 *
 * → クライアント投稿を追加／編集／削除すると、その時点でキャッシュが破棄され、
 *   トップページの一覧・件数が自動で最新化されます。
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'PG_CLIENT_MAP_CACHE_KEY' ) ) {
	define( 'PG_CLIENT_MAP_CACHE_KEY', 'pg_client_map_index_v1' );
}

/** クライアント投稿を取得するカテゴリスラッグ */
if ( ! defined( 'PG_CLIENT_MAP_CATEGORY' ) ) {
	define( 'PG_CLIENT_MAP_CATEGORY', 'client-voice' );
}

/** 都道府県スラッグが入っている ACF フィールド名 */
if ( ! defined( 'PG_CLIENT_MAP_META_KEY' ) ) {
	define( 'PG_CLIENT_MAP_META_KEY', 'voice_region' );
}

/**
 * エリアマスタを返す。
 *
 * @return array<string, array{name:string, prefectures:array<string,string>}>
 */
function pg_client_areas() {
	static $areas = null;

	if ( null === $areas ) {
		$file  = get_theme_file_path( 'template/data/client-areas.php' );
		$areas = file_exists( $file ) ? include $file : array();

		if ( ! is_array( $areas ) ) {
			$areas = array();
		}
	}

	return $areas;
}

/**
 * 単一エリアの定義を返す。存在しなければ null。
 *
 * @param string $area_key area01 〜 area06
 * @return array|null
 */
function pg_client_area( $area_key ) {
	$areas = pg_client_areas();

	return isset( $areas[ $area_key ] ) ? $areas[ $area_key ] : null;
}

/**
 * Git 管理の追加クライアント名簿を返す。
 *
 * @return array<string, array>
 */
function pg_client_extra() {
	static $extra = null;

	if ( null === $extra ) {
		$file  = get_theme_file_path( 'template/data/client-extra.php' );
		$extra = file_exists( $file ) ? include $file : array();

		if ( ! is_array( $extra ) ) {
			$extra = array();
		}
	}

	return $extra;
}

/**
 * 都道府県スラッグ => クライアント配列 のインデックスを返す。
 *
 * 内訳は 2 系統:
 *   1. クライアントボイス投稿（WordPress 管理画面で追加／編集）
 *   2. template/data/client-extra.php（Git で追加／編集）
 *
 * 1 は 1 回のクエリでまとめて取得しトランジェントにキャッシュ、
 * 2 は毎回読むためデプロイ直後から即反映されます。
 *
 * @return array<string, array<int, array{id:int,name:string,url:string,nolink:bool}>>
 */
function pg_client_map_index() {
	static $index = null;

	if ( null !== $index ) {
		return $index;
	}

	$from_posts = get_transient( PG_CLIENT_MAP_CACHE_KEY );

	if ( ! is_array( $from_posts ) ) {
		$from_posts = pg_client_map_query_posts();
		set_transient( PG_CLIENT_MAP_CACHE_KEY, $from_posts, DAY_IN_SECONDS );
	}

	$index = pg_client_map_merge_extra( $from_posts );

	return $index;
}

/**
 * クライアントボイス投稿を 1 回のクエリで取得し、都道府県ごとに振り分ける。
 *
 * （従来は都道府県ごとに WP_Query を発行していたため、
 *   トップページ 1 表示で 46 回のクエリが走っていました）
 *
 * @return array<string, array<int, array>>
 */
function pg_client_map_query_posts() {
	$index = array();

	$query = new WP_Query(
		array(
			'post_type'              => 'post',
			'category_name'          => PG_CLIENT_MAP_CATEGORY,
			'post_status'            => 'publish',
			'posts_per_page'         => -1,
			'ignore_sticky_posts'    => true,
			'no_found_rows'          => true,
			'update_post_term_cache' => false,
			'meta_query'             => array(
				array(
					'key'     => PG_CLIENT_MAP_META_KEY,
					'compare' => 'EXISTS',
				),
			),
		)
	);

	foreach ( $query->posts as $client_post ) {
		$region = get_post_meta( $client_post->ID, PG_CLIENT_MAP_META_KEY, true );

		if ( ! is_string( $region ) || '' === $region ) {
			continue;
		}

		$display_name = pg_client_map_field( 'voice_name', $client_post->ID );

		if ( '' === $display_name ) {
			$display_name = get_the_title( $client_post->ID );
		}

		$index[ $region ][] = array(
			'id'     => (int) $client_post->ID,
			'name'   => $display_name,
			'url'    => get_permalink( $client_post->ID ),
			'nolink' => (bool) pg_client_map_field( 'meta_noindex', $client_post->ID ),
		);
	}

	wp_reset_postdata();

	return $index;
}

/**
 * Git 管理の追加名簿をインデックスに合流させる。
 *
 * 同名が両方にある場合は投稿側を優先し、追加名簿側は無視します。
 * url が空（または未指定）のものはリンク無しのプレーン表示になります。
 *
 * @param array $index
 * @return array
 */
function pg_client_map_merge_extra( $index ) {
	foreach ( pg_client_extra() as $region => $clients ) {
		if ( ! is_array( $clients ) || '' === $region ) {
			continue;
		}

		$seen = array();

		if ( ! empty( $index[ $region ] ) ) {
			foreach ( $index[ $region ] as $client ) {
				$seen[ $client['name'] ] = true;
			}
		}

		foreach ( $clients as $client ) {
			if ( is_string( $client ) ) {
				$client = array( 'name' => $client );
			}

			if ( ! is_array( $client ) || empty( $client['name'] ) ) {
				continue;
			}

			$name = (string) $client['name'];

			if ( isset( $seen[ $name ] ) ) {
				continue;
			}

			$url = isset( $client['url'] ) ? (string) $client['url'] : '';

			$index[ $region ][] = array(
				'id'     => 0,
				'name'   => $name,
				'url'    => $url,
				'nolink' => ( '' === $url ),
			);

			$seen[ $name ] = true;
		}
	}

	return $index;
}

/**
 * ACF があれば get_field、無ければ生のメタ値を返す。
 *
 * @param string $key
 * @param int    $post_id
 * @return mixed
 */
function pg_client_map_field( $key, $post_id ) {
	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $key, $post_id );
	} else {
		$value = get_post_meta( $post_id, $key, true );
	}

	return ( null === $value || false === $value ) ? '' : $value;
}

/**
 * 指定エリアの「都道府県名 => クライアント配列」を、
 * クライアントが 1 件以上ある都道府県だけ、マスタの並び順で返す。
 *
 * @param string $area_key
 * @return array<string, array<int, array>>
 */
function pg_client_area_groups( $area_key ) {
	$area = pg_client_area( $area_key );

	if ( ! $area || empty( $area['prefectures'] ) ) {
		return array();
	}

	$index  = pg_client_map_index();
	$groups = array();

	foreach ( $area['prefectures'] as $slug => $label ) {
		if ( ! empty( $index[ $slug ] ) ) {
			$groups[ $label ] = $index[ $slug ];
		}
	}

	return $groups;
}

/**
 * 指定エリアのクライアント件数。
 *
 * @param string $area_key
 * @return int
 */
function pg_client_area_count( $area_key ) {
	$count = 0;

	foreach ( pg_client_area_groups( $area_key ) as $clients ) {
		$count += count( $clients );
	}

	return $count;
}

/**
 * マスタに載っている都道府県に紐づくクライアントの総数。
 *
 * @return int
 */
function pg_client_total_count() {
	$total = 0;

	foreach ( array_keys( pg_client_areas() ) as $area_key ) {
		$total += pg_client_area_count( $area_key );
	}

	return $total;
}

/**
 * 見出しに出す「◯◯社以上」の数値。
 *
 * 実件数を $step 単位で切り捨てたものと $minimum の大きい方を返すので、
 * クライアントが増えれば自動で繰り上がり、実績値が下限を割っても
 * 表記が下がることはありません。
 *
 * @param int $minimum 下限（現行表記の 100 社）
 * @param int $step    繰り上げ単位
 * @return int
 */
function pg_client_headline_count( $minimum = 100, $step = 10 ) {
	$total   = pg_client_total_count();
	$rounded = $step > 0 ? (int) ( floor( $total / $step ) * $step ) : $total;

	return max( (int) $minimum, $rounded );
}

/**
 * クライアント投稿が更新されたらキャッシュを破棄する。
 */
function pg_client_map_flush_cache() {
	delete_transient( PG_CLIENT_MAP_CACHE_KEY );
}

add_action( 'save_post', 'pg_client_map_flush_cache', 20 );
add_action( 'acf/save_post', 'pg_client_map_flush_cache', 20 );
add_action( 'deleted_post', 'pg_client_map_flush_cache', 20 );
add_action( 'trashed_post', 'pg_client_map_flush_cache', 20 );
add_action( 'untrashed_post', 'pg_client_map_flush_cache', 20 );
add_action( 'switch_theme', 'pg_client_map_flush_cache', 20 );
