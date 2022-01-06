<?php get_header(); ?>

  <main class="main">
    <div class="heading-parallax heading-parallax--hammer">
      <h1 class="heading-parallax-text"><?php the_title(); ?></h1>
    </div>

    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </main>

<?php get_footer(); ?>
