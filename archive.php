<?php get_header(); ?>

<main class="main">
  <div class="heading-parallax heading-parallax--hammer">
    <h1 class="heading-parallax-text">お知らせ一覧</h1>
  </div>

  <div class="container">
    <?php if ( have_posts() ) : ?>
      <!-- 投稿があるときの表示 -->

      <ol class="news-list">
        <?php while ( have_posts() ) : the_post(); ?>
          <li class="news-list-item">
            <a href="<?php the_permalink(); ?>" class="news-list-link">
              <dl class="news-list-inner">
                <dt class="news-list-date">
                  <time datetime="<?php the_time( DATE_W3C ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
                </dt>
                <dd class="news-list-text"><?php the_title(); ?></dd>
              </dl>
            </a>
          </li>
        <?php endwhile; ?>
      </ol>

      <!-- ページネーション -->
      <div class="pagination">
        <?php
          $args = [
            'prev_text' => '<',
            'next_text' => '>',
            'show_all' => 'true'
          ];
          the_posts_pagination( $args );
        ?>
      </div>

    <?php else : ?>
      <!-- 投稿がないときの表示 -->

      <p>まだ投稿がありません。</p>

    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
