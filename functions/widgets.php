<?php
//----------------------------------------------------
// ウィジェット
//----------------------------------------------------

function corporate_widgets_init() {
  $args = [
    'name' => '記事サイドバー',
    'id' => 'sidebar',
    // 'before_widget' => '<ul class="widget">',
    // 'after_widget' => '</ul>',
  ];
  register_sidebar( $args );

  $argsFooter = [
    'name' => 'フッターウィジェット',
    'id' => 'footer_widget',
    // 'before_widget' => '<ul class="widget">',
    // 'after_widget' => '</ul>',
  ];
  register_sidebar( $argsFooter );
}

add_action( 'widgets_init', 'corporate_widgets_init' );
