<?php
//----------------------------------------------------
// カスタムメニューの設定
//----------------------------------------------------

$location = [
  'global' => 'グローバル',
];
register_nav_menus($location);

$location_footer = [
  'footer' => 'フッター',
];
register_nav_menus($location_footer);
