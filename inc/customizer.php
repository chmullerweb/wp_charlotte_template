<?php
//wp_customize récupère les éléments de customisation
function montheme_customize_register($wp_customize){

        //------------------------------------------------------------------------------------------
            //Enregistre un nouveau dossier 'Copywrights' au customizer
        //------------------------------------------------------------------------------------------

    $wp_customize -> add_panel(
        'copyrights_panel', //id du dossier,
        array(
            'title' => 'Section Copyrights'
        )
    );

    $wp_customize->add_section(
        'copyrights',
        array(
            'title' => 'Copyrights', //nom de la section
            'description' => 'Réglages des copyrights', // Titre à l'intérieur de la section
            'panel' => 'copyrights_panel' //dans quel dossier va s'ajouter la section (donner l'ID)
        )
    );

    $wp_customize->add_setting(
        'copyrights_year',
        array(
            'default' => '2020', 
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'copyrights_year',
        array(
            'label' => 'Année', 
            'description' => 'Année des droits',
            'section' => 'copyrights',
            'setting' => 'copyrights_year',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'copyrights_title_website',
        array(
            'default' => 'Rock Band', 
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'copyrights_title_website',
        array(
            'label' => 'Nom du site', 
            'description' => 'Renseigner le nom du site',
            'section' => 'copyrights',
            'setting' => 'copyrights_title_website',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'copyrights_text',
        array(
            'default' => 'Tous droits réservés', 
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'copyrights_text',
        array(
            'label' => 'Texte légal', 
            'description' => 'Ecrire le texte légal',
            'section' => 'copyrights',
            'setting' => 'copyrights_text',
            'type' => 'text'
        )
    );

    //------------------------------------------------------------------------------------------
            //Créer une checkbox pour afficher le widget latéral
    //------------------------------------------------------------------------------------------

//     // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
//   // identifiant : 'fp_container_boxy'
//   // valeur par défaut : false (booléen)
//   // type : 'theme_mod'
//   $wp_customize -> add_setting(
//     'sidebar_boxy',
//       array(
//           'default' => 'Oui',
//           'type' => 'theme_mod' 
//           )
//   );


// // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_container_boxy'
// // libellé : 'Affichage avec effet boxy'
// // description : 'Style du conteneur de la page d\'accueil.'
// // section : 'fp_container'
// // type : case à cocher - Voir doc pour connaître la valeur à passer :
// // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
// $wp_customize -> add_control(
//       'sidebar_boxy',
//       array(
//           'label' => 'Afficher le widget',
//           'description' => 'Est-ce que le widget latéral est visible ?',
//           'section' => 'sidebar', //section dans laquelle s'afficher 
//           'type' => 'checkbox'
//       )
// );

    //------------------------------------------------------------------------------------------
            //Enregistre un nouveau dossier 'Page d'Accueil' au customizer
    //------------------------------------------------------------------------------------------


    $wp_customize -> add_panel(
        'homepage_panel', 
        array(
            'title' => 'Editer la page d\'acceuil',
        )
    );

    //La section pour l'image en couverture 
    $wp_customize->add_section(
        'homepage_images',
        array(
            'title' => 'Images en Homepage', 
            'description' => 'Editer les images de la page d\'acceuil', 
            'panel' => 'homepage_panel' 
        )
    );

    $wp_customize -> add_setting(
        'cover_image',
        array(
            'default' => get_template_directory() . '/assets/images/alex-bracken-unsplash.jpg',
            'type' => 'theme_mod' 
        )
    );

    $wp_customize -> add_control(
        new WP_Customize_Image_control(
            $wp_customize, 
            'cover_image',
            array(
                'label' => 'Image en couverture',
                'section' => 'homepage_images', 
                'settings' => 'cover_image'  
            )

        )
    );

    $wp_customize -> add_setting(
        'presentation_image_main',
        array(
            'default' => get_template_directory() . '/assets/images/yannis-papanastasopoulos-unsplash.jpg',
            'type' => 'theme_mod' 
        )
    );

    $wp_customize -> add_control(
        new WP_Customize_Image_control(
            $wp_customize, 
            'presentation_image_main',
            array(
                'label' => 'Image de présentation',
                'section' => 'homepage_images', 
                'settings' => 'presentation_image_main'  
            )

        )
    );

    //La section pour le texte en couverture
    $wp_customize->add_section(
        'homepage_cover_text',
        array(
            'title' => 'Texte en couverture', 
            'description' => 'Editer le texte en couverture de la page d\'acceuil', 
            'panel' => 'homepage_panel' 
        )
    );

    $wp_customize -> add_setting(
        'homepage_cover_title',
        array(
            'default' => 'Bientôt en concert',
            'type' => 'theme_mod' 
        )
    );

    $wp_customize -> add_control(
            'homepage_cover_title',
            array(
                'label' => 'Titre principal',
                'description' => 'Ecrire le titre principal en couverture',
                'section' => 'homepage_cover_text', 
                'settings' => 'homepage_cover_title',
                'type' => 'text'  
            )

            );

    

    //La section pour le texte de présentation
    $wp_customize->add_section(
        'homepage_presentation_text',
        array(
            'title' => 'Texte de Présentation', 
            'description' => 'Editer le texte de présentation de la page d\'acceuil', 
            'panel' => 'homepage_panel' 
        )
    );

    $wp_customize -> add_setting(
        'presentation_title_text',
        array(
            'default' => 'Un super groupe de musique',
            'type' => 'theme_mod' 
        )
    );

    $wp_customize -> add_control(
            'presentation_title_text',
            array(
                'label' => 'Titre de présentation',
                'description' => 'Ecrire le texte de présentation',
                'section' => 'homepage_presentation_text', 
                'settings' => 'presentation_title_text',
                'type' => 'text'  
            )

            );
    

};

add_action( 'customize_register', 'montheme_customize_register' );

