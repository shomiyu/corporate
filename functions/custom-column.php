<?php
//----------------------------------------------------
// カスタム投稿タイプ - コラム
//----------------------------------------------------

function my_theme_post_type_init() {
  $labels = [
    'name'               => 'コラム', // 投稿タイプの名前 （初期値： 投稿タイプ名）
    'singular_name'      => 'コラム', // この投稿タイプの1投稿の名前 （初期値： 'name' の値）
    'menu_name'          => 'コラム', // メニューのテキスト （初期値： 'name' の値）
    'name_admin_bar'     => 'コラム', // 管理バーの「新規追加」の名前 初期値： 'singular_name' なければ　'name'の値
    'all_items'          => 'コラム一覧', // 一覧表示のメニューに使うテキスト （初期値： 'name' の値）
    'add_new'            => 'コラムを追加', // 「新規追加」のテキスト （日本語時の初期値： '新規追加'）
    'add_new_item'       => '新規コラムを追加', // 「新規○○を追加」のテキスト （日本語時の初期値： '新規投稿を追加' または '新規ページを追加'）
    'edit_item'          => 'コラムを編集', // 「〜を編集」のテキスト（日本語時の初期値： '投稿の編集' または 'ページの編集'）
    'new_item'           => '新規コラム', // 「新規〜」のテキスト （日本語時の初期値： '新規投稿' または '新規ページ'）
    'view_item'          => 'コラムを表示', // 管理バーの「〜を表示」のテキスト （日本語時の初期値： '投稿を表示' または 'ページを表示'）
    'search_items'       => 'コラムを検索', // 「〜を検索」のテキスト （日本語時の初期値： '投稿を検索' または 'ページを検索'）
    'not_found'          => 'コラムが見つかりませんでした', // 「〜が見つかりませんでした」のテキスト （日本語時の初期値： '投稿が見つかりませんでした' または 'ページが見つかりませんでした'）
    'not_found_in_trash' => 'ゴミ箱内にコラムが見つかりませんでした', // 「ゴミ箱内に〜が見つかりませんでした」のテキスト （日本語時の初期値： 'ゴミ箱内に投稿が見つかりませんでした' または 'ゴミ箱内にページが見つかりませんでした'）
    'parent_item_colon'  => '親のコラム', // 「親〜：」のテキスト （日本語時の初期値： '親ページ'）
  ];

  $args = [
    'labels'              => $labels,
    'discription'         => 'コラムの投稿', // 投稿タイプの簡単な説明 （初期値： 空）
    'public'              => true, // 投稿タイプを公開するかどうか （初期値： false）
    'exclude_from_search' => true, // 検索結果から除外するか （初期値： public の反対）
    'publicly_queryable'  => true, // post_type クエリが実行可能（投稿の一覧表示など） かどうか （初期値： public の値）
    'show_ui'             => true, // 投稿を管理する画面にデフォルトのUIを利用するかどうか （初期値： public の値）
    'show_in_nav_menus'   => true, // ナビゲーションメニューでこの投稿タイプが選択可能かどうか （初期値： public の値）
    'show_in_menu'        => true, // 管理画面にこの投稿タイプを表示するかどうか （初期値： public の値）
    'show_in_admin_bar'   => true, // この投稿タイプを WordPress の管理バーから使えるようにするかどうか （初期値： public の値）
    'menu_position'       => 5,// この投稿タイプが表示されるメニューの位置 (初期値： コメントの下)
    'menu_icon'           => 'dashicons-admin-customizer',// このメニューで使用するアイコンの URL、または Dashicons のアイコンの名前 (初期値： 投稿アイコン)
    'capability_type'     => 'post',// 投稿の権限 (初期値： post)
    'hierarchical'        => false, // この投稿タイプが階層を持つ（固定ページのようにする） かどうか （初期値： false）
    'supports'            => [ // 投稿タイプでサポートされる機能の配列 （初期値： 'title'と'editor'）
      'title', // タイトル
      'editor', // 内容の編集
      'author', // 作成者
      'thumbnail', // アイキャッチ画像
      'excerpt', // 抜粋
      'trackbacks', // トラックバック送信
      'custom-fields', // カスタムフィールド
      'comments', // コメント
      'revisions', // リビジョン
      'page-attributes', // メニューの順序
      'post-formats', // 投稿フォーマット
    ],
    'taxonomies'          => [ // 投稿タイプで使用する、登録されたタクソノミー （初期値:　なし）
      'category', // カテゴリー
      'post_tag', // タグ
    ],
    'has_archive'         => true, // アーカイブを有効にするかどうか （初期値： false）
    'rewrite'             => [ // パーマリンク設定 （初期値： true（ポストタイプ名をスラッグに使う））
      'slug'       => 'column', // スラッグ名の変更
      'with_front' => false, //  パーマリンク構造を手前につけるかどうか
    ],
    'show_in_rest' => true, // Gutenbergを有効化するかどうか （初期値： false）
  ];
  register_post_type('column', $args);
}
add_action('init', 'my_theme_post_type_init');
