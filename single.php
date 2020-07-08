<?php get_header(); ?>

  <main class="container site-content">
  <?php
  //s'il y a un article dans ma bdd alors je rentre dans cette boucle
   if(have_posts()) : 
    while(have_posts()) : the_post(); ?>
      <!-- chaque article reprend ce layout : -->
      <article class="entry single">
        <header class="entry-header">
          <section class="entry-metadata">
            <section class="entry-data">
              <h4 class="author">
              <!-- Envoie l'internaute vers tous les articles écrit par cet auteur -->
                <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
                  <!-- the_author() : on récupère le nom de l'auteur (chaine de caractères) -->
                <?php the_author(); ?></a>
              </h4>

     
              <h6 class="publish-date">29 juin 2020</h6>
              <h5 class="entry-category"><a href="#">Actualité</a></h5>
              <h4 class="comments-number"><i class="fas fa-comment"></i> 3 commenatires</h4>
            </section>
            <h2 class="entry-title">Vos meilleurs moments en concert</h2>
          </section>
          <img src="./assets/images/joey-thompson-unsplash.jpg" alt="Foule"
          class="featured-image">
        </header>
        <section class="entry-content">
          <p>
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deseru mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt…
          </p>

          <p>
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
            aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem i
            psum quia dolor sit amet, consectetur, adipisci velit, sed quia
            non numquam eius modi tempora incidunt ut labore et dolore magnam
            aliquam quaerat voluptatem.
          </p>

          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
            quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo.
          </p>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
          </p>
        </section>
        <footer class="entry-footer">
          <section class="author-card">
            <section class="author-thumbnail">
              <img src="./assets/images/logo-rock-band.png" alt="Photo de l'auteur" class="author-picture">
            </section>
            <section class="author-metadata">
              <h3 class="author-meta-name">Ada Lovelace</h3>
              <p class="author-meta-description">
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                aut fugit, sed quia consequuntur magni dolores eos qui ratione
                voluptatem sequi nesciunt.
              </p>
            </section>
          </section>
          <nav class="navigation pagination entry-pagination">
            <ul>
              <li><a href="#"><i class="fas fa-arrow-left"></i> Nos 5 meilleurs souvenirs en concert</a></li>
              <li><a href="#">Comment bien préparer un concert en 3 étapes<i class="fas fa-arrow-right"></i></a></li>
            </ul>
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
  </main>
  <footer class="site-footer">
    <section class="widgets-sections container">
      <div class="widgets-section widgets-section-1">
        <h4 class="widget-title">Zone de widgets 1</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-2">
        <h4 class="widget-title">Zone de widgets 2</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-3">
        <h4 class="widget-title">Zone de widgets 3</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-4">
        <h4 class="widget-title">Zone de widgets 4</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </section>
    <section class="footer-infos container">
      <div class="copyright">
        <p>© 2020 Descodeuses. Tous droits réservés.</p>
      </div>
      <div class="social-medias">
        <nav class="navigation navigation-bottom">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="index.html">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </section>
  </footer>
</body>
</html>
