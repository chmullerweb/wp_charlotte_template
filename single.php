<?php get_header(); ?>

<main class="container site-content">
    <?php
    //s'il y a un article dans ma bdd alors je rentre dans cette boucle
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <!-- chaque article reprend ce layout : -->
            <article class="entry single">
                <header class="entry-header">
                    <section class="entry-metadata">
                        <section class="entry-data">
                            <h4 class="author">
                                <!-- Affiche le nom de l'auteur et renvoie l'internaute vers tous les articles écrit par cet auteur -->
                                <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
                                    <?php the_author(); ?></a>
                            </h4>

                            <h6 class="publish-date"><?php the_date('d M Y'); ?></h6>
                            <?php
                            $categories = get_the_category();
                            $separator = " ";
                            $output = '';

                            if ($categories) {
                                foreach ($categories as $category) {
                                    $output = '<h5 class="entry-category"><a href="' . get_category_link($category->termID) . '">' . $category->cat_name . '</a></h5>';
                                }
                            };
                            echo trim($output, $separator);
                            ?>

                            <h4 class="comments-number"><i class="fas fa-comment"></i>
                                <?php comments_number('pas de commentaire', 'un commentaire', '% commentaires'); ?></h4>
                        </section>
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </section>
                    <?php
                    if (has_post_thumbnail()) {
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        $thumbnail_title = get_the_title($thumbnail_id);
                        the_post_thumbnail('full', [
                            'class' => 'featured-image',
                            'title' => $thumbnail_title,
                            'alt' => $thumbnail_alt
                        ]);
                    };
                    ?>
                </header>
                <section class="entry-content">
                    <?php the_content(); ?>
                </section>
                <footer class="entry-footer">
                    <section class="author-card">
                        <section class="author-thumbnail">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 96, 'retro', 'Photo de l\'auteur', ['class' => 'author-picture'] );?>
                        </section>
                        <section class="author-metadata">
                            <h3 class="author-meta-name"><?php the_author(); ?></h3>
                            <p class="author-meta-description">
                                <?php
                                if (the_author_meta('user_description')) {
                                    echo get_the_author_meta('user_description');
                                } else {
                                    echo 'Cet·te auteur·e n\'a pas encore renseigné sa biographie';
                                };
                                ?>
                            </p>
                        </section>
                    </section>
                    <nav class="navigation pagination entry-pagination">
                    <?php 
                        the_post_navigation(
                            array(
                                'prev_text' => '<i class="fas fa-arrow-left"></i> %title',
                                'next_text' => '%title <i class="fas fa-arrow-right"></i>'
                                )
                        )
                    ?> 
                    </nav>
                    <section class="comments">
                        <h3 class="comments-title">3 commentaires pour "Vos meilleurs moments en concert"</h3>
                        <p>Ici : liste des commentaires de l'article</p>
                        <h3 class="comments-title">Laisser un commentaire</h3>
                        <form class="comment-form" action="index.html" method="post">
                            <label for="name">Nom</label>
                            <input type="text" name="name" required>
                            <label for="email">E-mail</label>
                            <input type="email" name="email" required>
                            <label for="comment">Commentaire</label>
                            <input type="textarea" rows="10" cols="80" name="comment" required>
                            <input type="submit" name="submit" value="Envoyer">
                        </form>
                    </section>
                </footer>
            </article>
    <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>