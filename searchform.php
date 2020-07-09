<form class="search-form" action="<?php echo esc_url(home_url('/')); ?>" method="post">
                <input type="search" aria-label="Search" name="s" value="<?php echo get_search_query( );?>" placeholder="Tapez quelque chose...">
                <input type="submit" name="submit" value="Rechercher">
</form>