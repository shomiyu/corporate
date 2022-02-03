<?php get_header(); ?>

  <main class="main">
    <div class="heading-parallax heading-parallax--column">
      <p class="heading-parallax-text">コラム</p>
    </div>

    <div class="container">
      <div class="article-header">
        <h1><?php the_title(); ?></h1>
      </div>

      <div class="post">
        <?php the_content(); ?>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
