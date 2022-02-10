<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header-container">
      <h1 class="header-logo">
        <a href="/">
          <img src="http://placehold.jp/160x48.png" alt="ロゴ">
        </a>
      </h1>

      <nav class="global-menu">
        <?php
          $args = [
            'theme_location' => 'global',
            'menu_class' => 'menu',
            'container' => false,
          ];
          wp_nav_menu( $args );
        ?>
      </nav>
    </div>
  </header>
