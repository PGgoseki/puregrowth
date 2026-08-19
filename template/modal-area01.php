<?php
/**
 * 後方互換用の薄いラッパー。
 * 実体は template/modal-area.php、データは template/data/client-areas.php です。
 * 新規実装では get_template_part( 'template/modal-area', null, array( 'area' => 'area01' ) )
 * を直接呼び出してください。
 */
get_template_part( 'template/modal-area', null, array( 'area' => 'area01' ) );
