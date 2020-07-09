<!-- Template d'un formulaire classique de recherche -->

<!-- préciser dans action le chemin racine de notre site suivi de '/' pour ne pas générer d'erreur => esc_url() -->
<form class="form-inline my-2 my-lg-0 search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <!--
        # le formulaire renvoie un paramètre d'url qui affiche en valeur le mot tapé par l'utilisateur 
        # pour cela je précise le name de l'input !! obligatoire name="s" !!
        # je récupère la valeur tapée par l'utilisateur dans value grâce à la fonction get_search_query
    -->
    <input class="form-control mr-sm-2" type="search" placeholder="Tapez quelque chose..." aria-label="Search" name="s" value="<?php echo get_search_query( );?>">
    <button class="btn my-2 my-sm-0 search-i" type="submit"><a href="#"><i class="fas fa-search"></i></a></button>
</form>