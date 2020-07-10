<?php get_header(); 
if(have_posts()) : 
    // tant qu'il y a des pages à afficher, la page x sera affichée ainsi :
    while(have_posts()) : the_post();
?>
<?php if(has_post_thumbnail()){
      //the_post_thumbnail_url() : Récupère l'url de l'image renseignée comme vignette de la page page.php?>
  <section class="page-header" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <?php } else {?>
      <section class="page-header">
    <?php };?>
    <h1 class="page-title"><?php the_title(); ?></h1>
  </section>
  <main class="container site-content">
      <article class="entry page">
        <section class="entry-content">
        <?php the_content();?>
      </section>
      </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>
 <?php get_footer( ); ?>
