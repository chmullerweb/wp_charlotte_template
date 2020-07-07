<?php
//wp_customize récupère les éléments de customisation
function montheme_customize_register($wp_customize){

        //------------------------------------------------------------------------------------------
            //Enregistre un nouveau dossier 'Copywrights' au customizer
        //------------------------------------------------------------------------------------------

    $wp_customize -> add_panel(
        'copywrights_panel', //id du dossier,
        array(
            'title' => 'Section Copywrights'
        )
    );

    $wp_customize->add_section(
        'copywrights',
        array(
            'title' => 'Copywrights', //nom de la section
            'description' => 'Réglages des Copywrights', // Titre à l'intérieur de la section
            'panel' => 'copywrights_panel' //dans quel dossier va s'ajouter la section (donner l'ID)
        )
    );

    $wp_customize->add_setting(
        'copywrights_year',
        array(
            'default' => '2020', 
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'copywrights_year',
        array(
            'label' => 'Année', 
            'description' => 'Année des droits',
            'section' => 'copywrights',
            'setting' => 'copywrights_year',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'copywrights_title_website',
        array(
            'default' => 'Rock Band', 
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'copywrights_title_website',
        array(
            'label' => 'Nom du site', 
            'description' => 'Renseigner le nom du site',
            'section' => 'copywrights',
            'setting' => 'copywrights_title_website',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'copywrights_text',
        array(
            'default' => 'Tous droits réservés', 
            'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'copywrights_text',
        array(
            'label' => 'Texte légal', 
            'description' => 'Ecrire le texte légal',
            'section' => 'copywrights',
            'setting' => 'copywrights_text',
            'type' => 'text'
        )
    );

};

add_action( 'customize_register', 'montheme_customize_register' );