<?php get_header(); ?>

  <main class="main">
    <div class="heading-parallax heading-parallax--column">
      <h1 class="heading-parallax-text">コラム一覧</h1>
    </div>

    <div class="container">
      <?php if ( have_posts() ) : ?>
        <!-- 投稿があったとき -->

        <ol class="column-list">
          <?php while ( have_posts() ) : the_post(); ?>
            <li class="column-list-item">
              <a href="<?php the_permalink(); ?>" class="column-list-link">
                <section class="column-list-inner">
                  <div class="column-list-text-box">
                    <h3><?php the_title(); ?></h3>
                    <p class="column-list-date">
                      <time datetime="<?php the_time( DATE_W3C ); ?>">
                        <?php the_time( get_option( 'date_format' ) ); ?>
                      </time>
                    </p>
                    <p class="category">カテゴリー</p>
                  </div>
                  <figure class="column-list-image">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <!-- アイキャッチ画像があるとき -->
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <!-- アイキャッチ画像がないとき -->
                      <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/src/img/no_image.png" alt="">
                    <?php endif; ?>
                  </figure>
                </section>
              </a>
            </li>
          <?php endwhile; ?>
        </ol>

      <?php else : ?>
        <!-- 投稿がなかったとき -->

      <?php endif; ?>
    </div>
  </main>

<?php get_footer(); ?>
