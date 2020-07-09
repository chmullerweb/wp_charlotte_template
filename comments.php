<section class="comments">
            <h3 class="comments-title">
                <?php comments_number( 'pas de commentaire', 'un commentaire', '% commentaires');?>
                pour
                "<?php the_title(); ?>"
            </h3>
            <p>Tous les commentaires de l'article</p>
<?php
wp_list_comments(); // Afficher la liste des commentaires et leur contenu

//Pagination des commentaires. Visible si x nb de commentaires postés. Nb défini dans Réglages > Commentaires > Cocher Diviser les commenaites > nb de commentaires / page
echo '<div class="comments-pagination">';
paginate_comments_links(
    array(
        'prev_text'  => '<i class="fas fa-arrow-left"></i> Précédent',
        'next_text' => 'Suivant <i class="fas fa-arrow-right"></i>'
    )
);
echo '</div>';

comment_form(
    array( 
        'class_form' => 'comment-form',
        'title_reply' => 'Laisser un commentaire',  //titre qui s'affiche au-dessus d'un formulaire
        'label_submit' => 'Envoyer' //contenu du bouton pour valider son commentaire 
        )
);


?>

</section>

<!-- // Ne fonctionne pas car le template reste -->
<!-- $fields =  array(
    'label_submit' => 'Envoyer',
    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    'email'  => '<p class="comment-form-email"><label for="email">Email</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>'  
);

$comments_args = array(
    'fields' =>  $fields
);
comment_form($comments_args); -->
