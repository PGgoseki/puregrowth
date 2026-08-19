<?php
/**
 * クライアントエリアマスタ（唯一の正 / Single Source of Truth）
 * -----------------------------------------------------------------------------
 * トップページ「クライアント一覧」（日本地図のボタン＆モーダル）は
 * すべてこのファイルの内容から生成されます。
 *
 * 都道府県の追加・削除・並び順の変更・エリア名の変更は
 * このファイルだけを編集してコミットすれば反映されます。
 * front-page.php や modal-area*.php を触る必要はありません。
 *
 * key  : ACFフィールド voice_region に保存されているスラッグ
 * value: 表示名
 *
 * ※ スラッグは ACF の選択肢と完全に一致させてください。
 *    一致していない都道府県はモーダルに表示されません。
 */

return array(

	'area01' => array(
		'name'        => '北海道・東北地方',
		'prefectures' => array(
			'hokkaido'  => '北海道',
			'aomori'    => '青森県',
			'iwate'     => '岩手県',
			'miyagi'    => '宮城県',
			'akita'     => '秋田県',
			'yamagata'  => '山形県',
			'fukushima' => '福島県',
		),
	),

	'area02' => array(
		'name'        => '関東地方',
		'prefectures' => array(
			'ibaraki'  => '茨城県',
			'tochigi'  => '栃木県',
			'gunma'    => '群馬県',
			'saitama'  => '埼玉県',
			'chiba'    => '千葉県',
			'kanagawa' => '神奈川県',
			'tokyo'    => '東京都',
		),
	),

	'area03' => array(
		'name'        => '北陸・中部地方',
		'prefectures' => array(
			'niigata'   => '新潟県',
			'toyama'    => '富山県',
			'ishikawa'  => '石川県',
			'fukui'     => '福井県',
			'yamanashi' => '山梨県',
			'nagano'    => '長野県',
			'gifu'      => '岐阜県',
			'shizuoka'  => '静岡県',
			'aichi'     => '愛知県',
		),
	),

	'area04' => array(
		'name'        => '関西地方',
		'prefectures' => array(
			'mie'      => '三重県',
			'shiga'    => '滋賀県',
			'kyoto'    => '京都府',
			'osaka'    => '大阪府',
			'hyogo'    => '兵庫県',
			'nara'     => '奈良県',
			'wakayama' => '和歌山県',
		),
	),

	'area05' => array(
		'name'        => '中国・四国地方',
		'prefectures' => array(
			'tottori'   => '鳥取県',
			'shimane'   => '島根県',
			'okayama'   => '岡山県',
			'hiroshima' => '広島県',
			'yamaguchi' => '山口県',
			'tokushima' => '徳島県',
			'kagawa'    => '香川県',
			'ehime'     => '愛媛県',
			'kochi'     => '高知県',
		),
	),

	'area06' => array(
		'name'        => '九州・沖縄地方',
		'prefectures' => array(
			'fukuoka'   => '福岡県',
			'saga'      => '佐賀県',
			'nagasaki'  => '長崎県',
			'kumamoto'  => '熊本県',
			'oita'      => '大分県',
			'miyazaki'  => '宮崎県',
			'kagoshima' => '鹿児島県',
			'okinawa'   => '沖縄県',
		),
	),

);
