# wp_charlotte_template

Thème WordPress à développer en autonomie dans le cadre de ma formation Descodeuses.

//--------------------//
Installation préalable
//--------------------//

Pour visualiser correctement le site, installer les extensions : 
- Contact Form 7 (pour l'édition de formulaire)
- WooCommerce


//----------------------------------------//
Fonctionnalitées du site et mise en oeuvre
//----------------------------------------//

## Templating des pages suivantes :
 - Modèle de page d’accueil statique : front-page.php
 - Modèle des articles : index.php
 - Modèle d’un article : single.php
 - Modèle des commentaires : comments.php
 - Modèle de page : page.php
 - Partie de modèle d’en-tête : header.php
 - Partie de modèle de pied de page : footer.php
 - Partie de modèle de barre latérale : sidebar.php

## Fichiers annexes :
 - style.css (informations du thème - rappel des champs possibles) /8 points
 - screenshot.png (au bon format) /2 points
 - functions.php
 - customizer.php
 
## Options de personnalisation à développer (customizer.php et functions.php)
- En-tête
- Afficher un logo personnalisé ou titre du site si non défini
- Menu principal
- Pied de page
  -- 4 zones de widgets
--Pouvoir changer le texte du copyright ("© 2020 Descodeuses. Tous droits réservés").
- Menus

## Page d'accueil (front-page.php) 
 - Pouvoir changer l'image de fond.
- Titre : pouvoir modifier texte et taille.
- Boutons : pouvoir changer le texte, le le style et l'url du bouton.
- Toutes les zones de texte doivent être modifiables.
- Zone de citation : pouvoir changer les textes et le style. 

## Page de blog
- Zone de widgets latérale.
- Case à cocher pour afficher ou non la barre latérale (ajouter la classe hidden si cochée)

## Autres modèles et fonctionnalités développés
 - Modèle de page d'erreur : 404.php
 - Formulaire de recherche en pop-up (voir clic sur icon loupe dans l'en-tête)
 - Prise en compte de WooCommerce : 
 -- lier l'icône panier dans header.php à WooCommerce
 -- ne l'afficher que si WooCommerce est installé 
-- mettre à jour le nombre d'article du panier

## Mes aides :  
- https://premium.wpmudev.org/blog/how-to-localize-a-wordpress-theme-and-make-it-translation-ready/
- https://stackoverflow.com/questions/50033227/is-there-any-way-to-display-the-woocommerce-mini-cart-on-my-wordpress-site
- https://iftekhar.net/blog/how-to-check-if-woocommerce-is-active-or-not-in-wordpress/
- https://teamtreehouse.com/community/use-echo-homeurl-instead-of-bloginfourl-according-to-wordpress-reference
