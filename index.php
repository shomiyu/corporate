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
        <ul class="menu">
          <li class="menu-item">
            <a href="#!">私たちについて</a>
          </li>
          <li class="menu-item">
            <a href="#!">お知らせ</a>
          </li>
          <li class="menu-item">
            <a href="#!">お問い合せ</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main">
    <div class="main-visual">
      <picture>
        <source srcset="http://placehold.jp/375x500.png" media="(max-width: 767px)">
        <img src="http://placehold.jp/1440x436.png" alt="">
      </picture>
      <p class="main-visual-copy">キャッチコピー</p>
    </div>

    <section class="secondary-section">
      <div class="container">
        <h2 class="heading-center">サンプル法律事務所 3つの特長</h2>
        <ul class="row">
          <li class="feature-item">
            <section class="feature-item-inner">
              <div>
                <h3 class="feature-item-title">交通事故の実績多数</h3>
                <p>被害に遭われた方が泣き寝入りをしないために専門知識と交渉技術を持って正当な損害賠償額を勝ち取ります。</p>
              </div>
              <figure class="feature-item-image">
                <img src="http://placehold.jp/80x80.png" alt="">
              </figure>
            </section>
          </li>
          <li class="feature-item">
            <section class="feature-item-inner">
              <div>
                <h3 class="feature-item-title">専門家と共同しスピード解決</h3>
                <p>医師・税理士・公認会計士・司法書士など、各分野の専門家と共同し、スピーディーに解決へと導きます。</p>
              </div>
              <figure class="feature-item-image">
                <img src="http://placehold.jp/80x80.png" alt="">
              </figure>
            </section>
          </li>
          <li class="feature-item">
            <section class="feature-item-inner">
              <div>
                <h3 class="feature-item-title">明朗な料金の提示と丁寧な説明</h3>
                <p>事前に料金を提示し、納得していただいた上で案件を進めています。まずはお気軽にご相談ください。</p>
              </div>
              <figure class="feature-item-image">
                <img src="http://placehold.jp/80x80.png" alt="">
              </figure>
            </section>
          </li>
        </ul>
      </div>
    </section>

    <section>
      <div class="heading-parallax heading-parallax--hammer">
        <h2 class="heading-parallax-text">取扱業務</h2>
      </div>

      <section>
        <div class="container">
          <h3 class="heading-primary">個人のお客様</h3>
        </div>
      </section>
    </section>

    <section>
      <div class="heading-parallax heading-parallax--column">
        <h2 class="heading-parallax-text">コラム</h2>
      </div>
      <p>テキスト</p>
    </section>
  </main>

  <?php wp_footer(); ?>
</body>
</html>
