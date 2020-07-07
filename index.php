  <?php get_header(); ?>


  <main class="container site-content">
      <section class="main-content">
          <!-- On vérifie si des articles sont publiés puis on boucle la liste entière -->
          <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                  <!-- chaque article prend le template suivant : -->
                  <article class="entry post">
                      <header class="entry-header">
                          <!-- affiche la vignette de l'article si elle existe... -->
                          <?php if (has_post_thumbnail()) : ?>
                              <!-- ...dans une balise <img> qui prend en paramètre $size, $attribut['class', 'title'] -->
                              <?php the_post_thumbnail('full', ['class' => 'featured-image', 'title' => 'Vignette']); ?>
                          <?php endif; ?>
                          <section class="entry-metadata">
                              <section class="entry-data">
                                  <!-- affiche la date de publication de l'article -->
                                  <h6 class="publish-date"><?php the_time('d M Y'); ?></h6>
                                  <!-- affiche les catégories de l'article -->
                                  <?php
                                    // récupérer toutes les catégories dans une tableau $categories grâce à une fonction WP get_the_category()
                                    $categories = get_the_category();
                                    $separator = " ";
                                    $output = '';

                                    if (isset($categories)) {
                                        // chaque catégorie du tableau s'affiche selon le layout retourné dans $output
                                        foreach ($categories as $category) {
                                            $output .= '<h5 class="entry-category"><a href="' . get_category_link($category
                                                ->term_id) . '">' . $category->cat_name . '</a></h5>';
                                        }
                                    }
                                    // on affiche le return $output espacé selon $separator
                                    echo trim($output, $separator);
                                    ?>

                                  <!-- on affiche le nombre de commentaire -->
                                  <h4 class="comments-number"><i class="fas fa-comment"></i><?php comments_number(' 0', ' 1', ' %'); ?></h4>
                              </section>
                              <h2 class="entry-title">
                                  <!-- on affiche le titre et son url pour accéder à l'article -->
                                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                              </h2>
                          </section>
                      </header>
                      <section class="entry-content">
                          <!-- on affiche un extrait du contenu de l'article -->
                          <?php the_content('(...)'); ?>
                      </section>
                      <footer class="entry-footer">
                          <div class="read-more">
                              <!-- on redirige vers l'url de l'article -->
                              <a class="no_bb" href="<?php the_permalink(); ?>">Lire la suite</a>
                          </div>
                      </footer>
                  </article>
          <?php endwhile;
            endif; ?>
          <nav class="navigation pagination">
          <?php 
          the_posts_pagination(
            array(
                'prev_text' => '<i class="fas fa-arrow-left"></i> Précédent',
                'next_text' => 'Suivant <i class="fas fa-arrow-right"></i>'
            )
          );
        ?> 
          </nav>
      </section>

      <?php
        // J'inclue mon fichier sidebar.php qui contient le widget sidebar
        get_sidebar();
        ?>


  </main>

  <?php get_footer(); ?>