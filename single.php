<?php get_header(); ?>

  <div class="main">
    <div class="heading-parallax heading-parallax--hammer">
      <p class="heading-parallax-text">お知らせ</p>
    </div>

    <div class="container">
      <div class="single-container">
        <main class="single-main">
          <div class="article-header">
            <h1 class="article-heading"><?php the_title(); ?></h1>
            <ul class="article-date">
              <li class="post">2022年1月6日</li>
              <li class="update"><time datetime="2022-01-06">2022年1月6日</time></li>
            </ul>
          </div>

          <div class="post">
            <?php the_content(); ?>
          </div>
        </main>

        <aside class="single-aside">
          <h2 class="sidebar-title">カテゴリー</h2>
          <ul class="sidebar-list">
            <?php dynamic_sidebar( 'sidebar' ); ?>
          </ul>
        </aside>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
