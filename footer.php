<footer class="site-footer">
  <section class="widgets-sections container">
    <!-- Je crée une zone de Widget dynamique dans mon footer -->
    <div class="widgets-section widgets-section-1" id="widgets-section-1">
      <?php
      echo montheme_display_widget('widget-section-1');
      ?>
    </div>
    <div class="widgets-section widgets-section-2" id="widgets-section-2">
      <?php
      echo montheme_display_widget('widgets-section-2');
      ?>
    </div>
    <div class="widgets-section widgets-section-3" id="widgets-section-3">
      <?php
      echo montheme_display_widget('widgets-section-3');
      ?>
    </div>
    <div class="widgets-section widgets-section-4" id="widgets-section-4">
      <?php
      echo montheme_display_widget('widgets-section-4');
      ?>
    </div>
  </section>
  <section class="footer-infos container">
    <div class="copyright">
      <p>© <?php echo get_theme_mod('copyrights_year') ?> <?php echo get_theme_mod('copyrights_title_website') ?>. <?php echo get_theme_mod('copyrights_text') ?>.</p>
    </div>
    <div class="social-medias">
      <nav class="navigation navigation-bottom">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'nav_footer'
          )
        );
        ?>
      </nav>
    </div>
  </section>
</footer>

<?php
// Avant le </body> j'appelle la fonction wp_footer afin d'ajouter les scripts JS rendant ma page intéractive et réactulisée dès qu'une modification via la barre personnalisation en head est faite-->
wp_footer();
?>

</body>

</html>