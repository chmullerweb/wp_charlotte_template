<form class="search-form" action="
<?php
 if (empty($_GET['s']) || $_GET['s'] === '') {
     echo esc_url(home_url('/404'));
 } else {
    echo esc_url(home_url('/'));
}
?>"
method="get">
                <input type="search" aria-label="Search" name="s" value="<?php echo get_search_query( );?>" placeholder="Tapez quelque chose...">
                <input type="submit" name="submit" value="Rechercher">
</form>