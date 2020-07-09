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

    $wp_customize -> add_setting(
        'icone_col_1',
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

                //La sous-section pour le bouton en couverture dans la section homepage_cover_text
            $wp_customize->add_setting(
                'cover_button_text',
                array(
                    'default' => 'Réserver un billet', 
                    'type' => 'theme_mod'
                )
            );
            
            $wp_customize->add_control(
                'cover_button_text',
                array(
                    'label' => 'Bouton en couverture', 
                    'description' => 'Texte du bouton',
                    'section' => 'homepage_cover_text',
                    'setting' => 'cover_button_text',
                    'type' => 'text'
                )
            );
            
            $wp_customize->add_setting(
                'cover_button_url',
                array(
                    'default' => '', 
                    'type' => 'theme_mod'
                )
            );
            
              $wp_customize->add_control(
                'cover_button_url',
                array(
                    'label' => 'Lien de redirection du bouton', 
                    'description' => 'Adresse URL de redirection du bouton',
                    'section' => 'homepage_cover_text',
                    'setting' => 'cover_button_url',
                    'type' => 'url'
                )
            );
            
              $wp_customize->add_setting(
                'cover_button_style',
                array(
                    'default' => '.btn-style-1', 
                    'type' => 'theme_mod'
                )
            );
            
              $wp_customize->add_control(
                'cover_button_style',
                array(
                    'label' => 'Style du bouton', 
                    'description' => 'Couleur de fond et du texte du bouton',
                    'section' => 'homepage_cover_text',
                    'setting' => 'cover_button_style',
                    'type' => 'radio',
                    'choices' => array(
                        'btn-style-1' => 'Noir',
                        'btn-style-2' => 'Transparent',
                        'btn-style-3' => 'Bordure bleu'
                                )
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
        //La sous-section Titre du texte de présentation
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
                'description' => 'Ecrire le titre de présentation',
                'section' => 'homepage_presentation_text', 
                'settings' => 'presentation_title_text',
                'type' => 'text'  
            )

            );
    
            //La sous-section Introduction du texte de présentation
    $wp_customize -> add_setting(
        'presentation_intro_text',
        array(
            'default' => 'Chocolate bar sugar plum sweet roll. Brownie jelly-o pudding jelly beans jujubes oat cake jelly lollipop chupa chups. Cupcake icing jelly-o carrot cake. Biscuit candy canes cake brownie lollipop.
            Gummi bears chocolate pudding sweet toffee cake. Tiramisu pudding sugar plum marzipan macaroon gummies. Donut croissant jujubes cotton candy fruitcake. Sesame snaps sesame snaps tart jujubes soufflé cake. Jelly beans wafer ice cream cookie bonbon chocolate cake oat cake bear claw jujubes. Fruitcake bear claw chocolate bar jelly beans donut muffin soufflé cheesecake.
            Brownie pie cake tootsie roll cookie. Jelly beans marshmallow marzipan gummi bears bonbon.',
            'type' => 'theme_mod' 
        )
    );

    $wp_customize -> add_control(
            'presentation_intro_text',
            array(
                'label' => 'Texte de présentation',
                'description' => 'Ecrire le texte de présentation',
                'section' => 'homepage_presentation_text', 
                'settings' => 'presentation_intro_text',
                'type' => 'textarea'  
            )

            );

            //La sous-section pour le bouton dans la section homepage_presentation_text
            $wp_customize->add_setting(
                'presentation_button_text',
                array(
                    'default' => 'En savoir plus', 
                    'type' => 'theme_mod'
                )
            );
            
            $wp_customize->add_control(
                'presentation_button_text',
                array(
                    'label' => 'Bouton', 
                    'description' => 'Texte du bouton',
                    'section' => 'homepage_presentation_text',
                    'setting' => 'presentation_button_text',
                    'type' => 'text'
                )
            );
            
            // $wp_customize->add_setting(
            //     'presentation_button_url',
            //     array(
            //         'default' => '', 
            //         'type' => 'theme_mod'
            //     )
            // );
            
            //   $wp_customize->add_control(
            //     'presentation_button_url',
            //     array(
            //         'label' => 'Lien de redirection du bouton', 
            //         'description' => 'Adresse URL de redirection du bouton',
            //         'section' => 'homepage_presentation_text',
            //         'setting' => 'presentation_button_url',
            //         'type' => 'dropdown_pages',
            //         'default' => 42 
            //                        )
            // );


            $wp_customize->add_setting(
                'presentation_button_url',
                 array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'add_field_dropdown_pages',
              ) );
              
              $wp_customize->add_control(
                'presentation_button_url',
                 array(
                'type' => 'dropdown-pages',
                'section' => 'homepage_presentation_text', // Add a default or your own section
                'label' => __( 'URL de redirection du bouton' ),
                'description' => __( 'Sélectionne la page de redirection' ),
              ) );
                          
              $wp_customize->add_setting(
                'presentation_button_style',
                array(
                    'default' => 'btn-style-1', 
                    'type' => 'theme_mod'
                )
            );
            
              $wp_customize->add_control(
                'presentation_button_style',
                array(
                    'label' => 'Style du bouton', 
                    'description' => 'Couleur de fond et du texte du bouton',
                    'section' => 'homepage_presentation_text',
                    'setting' => 'presentation_button_style',
                    'type' => 'radio',
                    'choices' => array(
                                'btn-style-1' => 'Noir',
                                'btn-style-2' => 'Transparent',
                                'btn-style-3' => 'Bordure bleu'
                                )
                )
            );

};

add_action( 'customize_register', 'montheme_customize_register' );

