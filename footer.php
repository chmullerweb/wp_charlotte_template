<footer class="site-footer">
<section class="widgets-sections container">
    <!-- Je crée une zone de Widget dynamique dans mon footer -->
  <div class="widgets-section widgets-section-1" id="widgets-section-1">
  <?php 
      //vérifiez si la zone de widget contient du contenu avec en paramètre l'ID de la zone
        if(is_active_sidebar('widgets-section-1')) {
          //la fonction range/affiche le widget dans la zone widget renseignée par son ID
          dynamic_sidebar('widgets-section-1');
        } else {
            ?>
            <div class="widget">
            <h4 class="widget-title">Zone de Widget</h4>
            <p>Croissant jelly chocolate cake fruitcake lollipop cake. Croissant brownie jelly beans cupcake. Donut gummies gummi bears marzipan</p>
            </div>
        <?php    
        }; 
    ?>
  </div>
  <div class="widgets-section widgets-section-2">
    <?php 
        if(is_active_sidebar('widgets-section-2')) {
          dynamic_sidebar('widgets-section-2');
        } else {
            ?>
            <div class="widget">
            <h4 class="widget-title">Zone de Widget</h4>
            <p>Croissant jelly chocolate cake fruitcake lollipop cake. Croissant brownie jelly beans cupcake. Donut gummies gummi bears marzipan</p>
            </div>
        <?php    
        }; 
    ?> 
  </div>
  <div class="widgets-section widgets-section-3">
  <?php 
        if(is_active_sidebar('widgets-section-3')) {
          dynamic_sidebar('widgets-section-3');
        } else {
            ?>
            <div class="widget">
            <h4 class="widget-title">Zone de Widget</h4>
            <p>Croissant jelly chocolate cake fruitcake lollipop cake. Croissant brownie jelly beans cupcake. Donut gummies gummi bears marzipan</p>
            </div>
        <?php    
        }; 
    ?>
  </div>
  <div class="widgets-section widgets-section-4">
  <?php 
        if(is_active_sidebar('widgets-section-4')) {
          dynamic_sidebar('widgets-section-4');
        } else {
            ?>
            <div class="widget">
            <h4 class="widget-title">Zone de Widget</h4>
            <p>Croissant jelly chocolate cake fruitcake lollipop cake. Croissant brownie jelly beans cupcake. Donut gummies gummi bears marzipan</p>
            </div>
        <?php    
        }; 
    ?>
  </div>
</section>
<section class="footer-infos container">
  <div class="copyright">
    <p>© <?php echo get_theme_mod('copyrights_year')?> <?php echo get_theme_mod('copyrights_title_website')?>. <?php echo get_theme_mod('copyrights_text')?>.</p>
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