<?php
//wp_customize récupère les éléments de customisation
function montheme_customize_register($wp_customize)
{

    //------------------------------------------------------------------------------------------
    //Enregistre un nouveau dossier 'Copywrights' au customizer
    //------------------------------------------------------------------------------------------

    $wp_customize->add_panel(
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

    $wp_customize->add_panel(
        'options_widgets', //id du dossier,
        array(
            'title' => 'Options des Widgets'
        )
    );

    $wp_customize->add_section(
        'options_widget_sidebar',
        array(
            'title' => 'Option du widget latéral', //nom de la section
            'description' => 'Réglages du widget', // Titre à l'intérieur de la section
            'panel' => 'options_widgets' //dans quel dossier va s'ajouter la section (donner l'ID)
        )
    );

    //La sous-section 'Afficher ou non le widget' dans la section options_widget_sidebar 
    $wp_customize->add_setting(
        'show_widget_sidebar',
        array(
            'default' => 'true',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'show_widget_sidebar',
        array(
            'label' => 'Afficher le widget latéral',
            'description' => 'Cocher la case si le widget latéral est visible',
            'section' => 'options_widget_sidebar',
            'settings' => 'show_widget_sidebar',
            'type' => 'checkbox'
        )
    );

    //------------------------------------------------------------------------------------------
    //Enregistre un nouveau dossier 'Page d'Accueil' au customizer
    //------------------------------------------------------------------------------------------


    $wp_customize->add_panel(
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

    $wp_customize->add_setting(
        'cover_image',
        array(
            'default' => get_template_directory() . '/assets/images/alex-bracken-unsplash.jpg',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
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

    $wp_customize->add_setting(
        'presentation_image_main',
        array(
            'default' => get_template_directory() . '/assets/images/yannis-papanastasopoulos-unsplash.jpg',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
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

    $wp_customize->add_setting(
        'icone_col_1',
        array(
            'default' => get_template_directory() . '/assets/images/yannis-papanastasopoulos-unsplash.jpg',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
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

    $wp_customize->add_setting(
        'homepage_cover_title',
        array(
            'default' => 'Bientôt en concert',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_cover_title',
        array(
            'label' => 'Titre principal',
            'description' => 'Ecrire le titre principal en couverture',
            'section' => 'homepage_cover_text',
            'settings' => 'homepage_cover_title',
            'type' => 'text'
        )

    );

    $wp_customize->add_setting(
        'homepage_cover_title_size',
        array(
            'default' => '90',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_cover_title_size',
        array(
            'label' => 'Taille du titre principal',
            'description' => 'Taille du texte du titre principal',
            'section' => 'homepage_cover_text',
            'setting' => 'homepage_cover_title_size',
            'type' => 'number'
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
    $wp_customize->add_setting(
        'presentation_title_text',
        array(
            'default' => 'Un super groupe de musique',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
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
    $wp_customize->add_setting(
        'presentation_intro_text',
        array(
            'default' => 'Chocolate bar sugar plum sweet roll. Brownie jelly-o pudding jelly beans jujubes oat cake jelly lollipop chupa chups. Cupcake icing jelly-o carrot cake. Biscuit candy canes cake brownie lollipop.
            Gummi bears chocolate pudding sweet toffee cake. Tiramisu pudding sugar plum marzipan macaroon gummies. Donut croissant jujubes cotton candy fruitcake. Sesame snaps sesame snaps tart jujubes soufflé cake. Jelly beans wafer ice cream cookie bonbon chocolate cake oat cake bear claw jujubes. Fruitcake bear claw chocolate bar jelly beans donut muffin soufflé cheesecake.
            Brownie pie cake tootsie roll cookie. Jelly beans marshmallow marzipan gummi bears bonbon.',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'presentation_intro_text',
        array(
            'label' => 'Texte de présentation',
            'description' => 'Ecrire le texte de présentation',
            'section' => 'homepage_presentation_text',
            'settings' => 'presentation_intro_text',
            'type' => 'textarea'
        )

    );

    //La sous-section pour le bouton 'En savoir plus' dans la section homepage_presentation_text
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


    $wp_customize->add_setting(
        'presentation_button_url',
        array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'add_field_dropdown_pages',
        )
    );

    $wp_customize->add_control(
        'presentation_button_url',
        array(
            'type' => 'dropdown-pages',
            'section' => 'homepage_presentation_text',
            'label' => __('URL de redirection du bouton'),
            'description' => __('Sélectionne la page de redirection'),
        )
    );

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

    //La section pour les 3 colonnes Avantages
    $wp_customize->add_section(
        'homepage_benefits',
        array(
            'title' => 'Liste des bénéfices du site',
            'description' => 'Editer le texte des colonnes',
            'panel' => 'homepage_panel'
        )
    );
    //La sous-section Colonne 1 
    $wp_customize->add_setting(
        'homepage_benefits_title_1',
        array(
            'default' => 'Concert célébration',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_benefits_title_1',
        array(
            'label' => 'Titre - Colonne 1',
            'description' => 'Ecrire le titre de la colonne 1',
            'section' => 'homepage_benefits',
            'settings' => 'homepage_benefits_title_1',
            'type' => 'text'
        )

    );

    $wp_customize->add_setting(
        'homepage_benefits_text_1',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt.',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_benefits_text_1',
        array(
            'label' => 'Texte - Colonne 1',
            'description' => 'Ecrire le texte de la colonne 1',
            'section' => 'homepage_benefits',
            'settings' => 'homepage_benefits_text_1',
            'type' => 'textarea'
        )

    );

    //La sous-section Colonne 2 
    $wp_customize->add_setting(
        'homepage_benefits_title_2',
        array(
            'default' => 'L\'amour de la musique',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_benefits_title_2',
        array(
            'label' => 'Titre - Colonne 2',
            'description' => 'Ecrire le titre de la colonne 2',
            'section' => 'homepage_benefits',
            'settings' => 'homepage_benefits_title_2',
            'type' => 'text'
        )

    );

    $wp_customize->add_setting(
        'homepage_benefits_text_2',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt.',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_benefits_text_2',
        array(
            'label' => 'Texte - Colonne 2',
            'description' => 'Ecrire le texte de la colonne 2',
            'section' => 'homepage_benefits',
            'settings' => 'homepage_benefits_text_2',
            'type' => 'textarea'
        )

    );

    //La sous-section Colonne 3 
    $wp_customize->add_setting(
        'homepage_benefits_title_3',
        array(
            'default' => '+3000 tickets en vente',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_benefits_title_3',
        array(
            'label' => 'Titre - Colonne 3',
            'description' => 'Ecrire le titre de la colonne 3',
            'section' => 'homepage_benefits',
            'settings' => 'homepage_benefits_title_3',
            'type' => 'text'
        )

    );

    $wp_customize->add_setting(
        'homepage_benefits_text_3',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt.',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_benefits_text_3',
        array(
            'label' => 'Texte - Colonne 3',
            'description' => 'Ecrire le texte de la colonne 3',
            'section' => 'homepage_benefits',
            'settings' => 'homepage_benefits_text_3',
            'type' => 'textarea'
        )

    );

    //La section pour la citation
    $wp_customize->add_section(
        'homepage_quote',
        array(
            'title' => 'Citation',
            'description' => 'Editer la zone citation',
            'panel' => 'homepage_panel'
        )
    );
    //La sous-section Texte pour la citation
    $wp_customize->add_setting(
        'homepage_quote_text',
        array(
            'default' => 'Ce qui se conçoit bien s\'énonce clairement et les mots pour le dire arrivent aisément.',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_quote_text',
        array(
            'label' => 'Texte de la citation',
            'description' => 'Ecrire le texte de la citation',
            'section' => 'homepage_quote',
            'settings' => 'homepage_quote_text',
            'type' => 'textarea'
        )

    );

    //La sous-section Auteur pour la citation
    $wp_customize->add_setting(
        'homepage_quote_author',
        array(
            'default' => 'Boileau',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_quote_author',
        array(
            'label' => 'Auteur de la citation',
            'description' => 'Ecrire le nom de l\'auteur de la citation',
            'section' => 'homepage_quote',
            'settings' => 'homepage_quote_author',
            'type' => 'text'
        )

    );

    //La sous-section Style pour la citation
    $wp_customize->add_setting(
        'homepage_quote_style',
        array(
            'default' => 'custom-quote-style-1',
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'homepage_quote_style',
        array(
            'label' => 'Style de la zone',
            'description' => 'Couleur de fond et du texte de la citation',
            'section' => 'homepage_quote',
            'setting' => 'homepage_quote_style',
            'type' => 'radio',
            'choices' => array(
                'custom-quote-style-1' => 'Corail',
                'custom-quote-style-2' => 'Transparent',
                'custom-quote-style-3' => 'Bleu'
            )
        )
    );
};

add_action('customize_register', 'montheme_customize_register');
