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
            'title' => 'copyrights', //nom de la section
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

};

add_action( 'customize_register', 'montheme_customize_register' );