<?php 
//------------------------------------------------------------------------------------------
  // Inclure les styles et script       
//------------------------------------------------------------------------------------------

function montheme_register_assets()
{
      //affiche le style défini avant celui de WP par défaut
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Oswald:wght@500;600;700&display=swap');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/39ca2ad730.js', [], false, true);
    wp_enqueue_script('javascript', 'assets/js/main.js', [], false, true );
}

add_action('wp_enqueue_scripts', 'montheme_register_assets');

//------------------------------------------------------------------------------------------
// Définir des fonctionnalités personnalisées et supportées par mon thème
# Menu Header
# Menu Footer
# Logo
//------------------------------------------------------------------------------------------
function montheme_setup(){
    //mon thème "supporte" le logo customisé
    add_theme_support( 'custom-logo' );

    //mon thème "supporte" les menus
    add_theme_support('menus');
    //je configure le menu header et footer en lui donnant un nom et une description
    register_nav_menu( 'nav_header', 'En tête du menu' );
    register_nav_menu( 'nav_footer', 'Menu en pied de page' );
}

add_action('after_setup_theme', 'montheme_setup');

//------------------------------------------------------------------------------------------
// Définir la zone de widgets
//------------------------------------------------------------------------------------------
function montheme_init_widgets() {
    # Zone de widget 1
      register_sidebar(
          array(
              'id' => 'widgets-section-1', //ID de la div 
              'name' => 'Zone de widgets 1', //nom du widget 
             'description' => 'Description de la zone de widgets',
             'before_widget' => '<div class="widget">', //ouvrir la balise <div> pour englober le widget 
             'after_widget' => '</div>',  //fermer la balise 
             'before_title' => '<h4 class="widget-title">', //ouvrir <h4> pour le titre du widget
             'after_title' => '</h4>' //fermer la balise titre
             )
          );
    // Zones de widgets 2 et 3
    register_sidebar(
        array(
            'id' => 'widgets-section-2', 
            'name' => 'Zone de widgets 2', 
           'description' => 'Description de la zone de widgets',
           'before_widget' => '<div class="widget">', 
           'after_widget' => '</div>',  
           'before_title' => '<h4 class="widget-title">', 
           'after_title' => '</h4>' 
           )
        );
    register_sidebar(
        array(
            'id' => 'widgets-section-3', 
            'name' => 'Zone de widgets 3', 
            'description' => 'Description de la zone de widgets',
            'before_widget' => '<div class="widget">', 
            'after_widget' => '</div>',  
            'before_title' => '<h4 class="widget-title ">', 
            'after_title' => '</h4>' 
            )
        );
    // Zone de widgets 4
    register_sidebar(
        array(
            'id' => 'widgets-section-4', 
            'name' => 'Zone de widgets 4', 
            'description' => 'Description de la zone de widgets',
            'before_widget' => '<div class="widget">', 
            'after_widget' => '</div>',  
            'before_title' => '<h4 class="widget-title">', 
            'after_title' => '</h4>' 
            )
        );
    // Zone de widgets sidebar
    register_sidebar(
        array(
            'id' => 'sidebar', 
            'name' => 'Zone de widgets Sidebar', 
            'description' => 'Description de la zone de widgets',
            'before_widget' => '<div class="widget">', 
            'after_widget' => '</div>',  
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>' 
            )
        );
}

// Afficher la zone de Widgets
add_action('widgets_init', 'montheme_init_widgets');

// Afficher le contenu du widget choisi - sinon si la zone widget est vide, créer un aperçu de la zone. Cette fonction est appelée dans footer.php
function montheme_display_widget($widgetId){
    //vérifiez si la zone de widget contient du contenu avec en paramètre l'ID de la zone
    if(is_active_sidebar($widgetId)) {
        //la fonction range/affiche le widget dans la zone widget renseignée par son ID
        dynamic_sidebar($widgetId);
      } else {
          ?>
          <div class="widget">
          <h4 class="widget-title">Aperçu zone de widget</h4>
          <p>Croissant jelly chocolate cake fruitcake lollipop cake. Croissant brownie jelly beans cupcake. Donut gummies gummi bears marzipan</p>
          </div>
<?php
}
}


//------------------------------------------------------------------------------------------
// Accéder à la customisation du template
//------------------------------------------------------------------------------------------
require get_template_directory() . '/inc/customizer.php';