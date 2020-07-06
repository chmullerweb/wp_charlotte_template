<?php 
    //Inclure les styles et script 
function montheme_register_assets()
{
    wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Oswald:wght@500;600;700&display=swap');
    wp_register_script('fontawesome', 'https://kit.fontawesome.com/4e5f136f21.js', [], false, true);

    //affiche le style défini avant celui de WP par défaut
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_script('javascript', 'assets/js/main.js', [], false, true );
}

add_action('wp_enqueue_scripts', 'montheme_register_assets');
