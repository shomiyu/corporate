  <footer class="footer">
    <?php
      $args = [
        'theme_location' => 'footer',
        'menu_class' => 'menu',
        'container' => false,
      ];
      wp_nav_menu( $args );
    ?>

    <div class="footer-upper">
      <div class="container">
        <div class="footer-column">
          <div>
            <p class="footer-logo">
              <a href="/">
                <img src="http://placehold.jp/160x48.png" alt="ロゴ">
              </a>
            </p>
            <p>〒000-0000<br>愛知県名古屋市中村区名駅〇丁目〇-〇<br>サンプルビル〇階</p>
          </div>

          <ul class="sidebar-list">
            <?php dynamic_sidebar( 'footer_widget' ); ?>
          </ul>
        </div>
      </div>
    </div>
    <p class="copyright"><small>©️ 2022 kitani All Rights Reserved.</small></p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
