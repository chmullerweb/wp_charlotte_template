<?php get_header(); ?>

<!-- Je rend la cover dynamique : image, titre principal et bouton -->
  <section class="page-header front-page-header" style="background-image:url(<?php echo get_theme_mod('cover_image');?>)">
    <h1 class="page-title"><?php echo get_theme_mod('homepage_cover_title');?></h1>
    <a href="<?php echo get_theme_mod('cover_button_url'); ?>">
      <button type="button" class="call-to-action <?php echo get_theme_mod('cover_button_style'); ?>"><?php echo get_theme_mod('cover_button_text'); ?>
      </button>
      
  </a>
  </section>
  <main class="container front-content">
    <section class="custom-presentation">
      <img src="<?php echo get_theme_mod('presentation_image'); ?>">
      
      <div class="custom-presentation-infos">
        <h2 class="custom-title"><?php echo get_theme_mod('presentation_title_text'); ?></h2>
        <p class="custom-content">
          <?php echo get_theme_mod('presentation_intro_text'); ?>
        </p>
        <a href="<?php echo get_theme_mod('presentation_button_url'); ?>">
          <button type="button" class="call-to-action <?php echo get_theme_mod('presentation_button_style'); ?>">En savoir plus</button>
        </a>
        </div>
    </section>
    <section class="custom-blocks">
      <div class="custom-block">
        <i class="fas fa-birthday-cake fa-3x"></i>
        <h3 class="custom-title">Concert célébration</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-music fa-3x"></i>
        <h3 class="custom-title">L'amour de la musique</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-ticket-alt fa-3x"></i>
        <h3 class="custom-title">+3000 tickets en vente</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </section>
    <section class="custom-section">
      <blockquote class="star-quote">
        <p class="quote-content">
          Ce qui se conçoit bien s'énonce clairement et les mots pour le dire
          arrivent aisément.
        </p>
        <cite class="quote-footer">
          Boileau
        </cite>
      </blockquote>
    </section>
  </main>
 
  <?php get_footer(); ?>
