<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Je récupère les infos sur le charset, la description, l'auteur et le nom avec bloginfo -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('author');?>">
    <title><?php bloginfo('name'); ?></title>

    <!-- J'appelle la fonction wp_head pour inclure des paramètres d'en-tête WP -->
    <?php wp_head(); ?>
</head>

<!-- J'ajoute la class body_class afin d'afficher la barre de personnalisation -->
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="site-branding">
        <!-- J'affiche un logo s'il existe, sinon j'affiche le nom du site via un <a>. -->
        <?php
        if(has_custom_logo()){
            the_custom_logo();
        } else {
        ?>
        <!-- Je récupère l'url de l'index.php et le nom du site avec bloginfo -->
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      <?php } ?>
    </div>

    <!-- Je crée une navigation header dynamique avec wp_nav_menu -->
    <nav class="navigation navigation-top desktop-navigation">

    <?php 
    //La zone de menu et son contenu à récupérer (toujours nommer la clé 'theme_location')
    wp_nav_menu(
        array(
        'theme_location' => 'header',
        'container' => false // évite que WP engloabe le <ul> dans une balise <div>
        )
    );
    ?>
    </nav>
    <nav class="navigation navigation-top mobile-navigation">
      <ul>
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <ul class="sub-navigation">
            <li><a href="front-page.html">Accueil</a></li>
            <li><a href="index.html" class="active">Blog</a></li>
            <li><a href="page.html">Page</a></li>
            <li><a href="single.html">Article</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <nav class="navigation navigation-aside">
      <ul>
        <li class="search-toggle">
          <a href="#"><i class="fas fa-search"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="count cart-counter">0</span>
          </a>
        </li>
      </ul>
    </nav>
    <section class="search-popup">
      <form class="search-form" action="index.html" method="post">
        <input type="text" name="search" value="" placeholder="Tapez quelque chose...">
        <input type="submit" name="submit" value="Rechercher">
      </form>
    </section>
  </header>