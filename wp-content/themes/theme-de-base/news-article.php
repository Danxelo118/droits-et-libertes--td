<?php 
/**
 * 	Template Name: news-article
 * 	Template Post Type: post, page, article, nouvelle 
 */

 get_template_part( 'partials/headerarticle' ); 

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>








<div class="bg">

    <section class="new-section">
        <h2 class="section-title"><?php echo get_field("nouvelle-title"); // Titre de la page ?></h2>
        <div class="section-text"><?php echo get_field("nouvelle-content"); // Titre de la page ?></div>
    
        <div class="section-image">
		 <img src="<?php echo get_field('image'); ?>" alt="Montréal Racial Profiling Judgment" class="full-width-image">
        </div>
    </section>
    
    <section class="new-section">
        <h2 class="section-title2"><?php echo get_field("nouvelle-title2"); // Titre de la page ?></h2>
        <div class="section-text">
        <?php echo get_field("nouvelle-content2"); // Titre de la page ?>
        </div>
    </section>
    
    <section class="new-section">
        <h2 class="section-title2"><?php echo get_field("nouvelle-title3"); // Titre de la page ?></h2>
        <div class="section-text">
        <?php echo get_field("nouvelle-content3"); // Titre de la page ?>
</div>
    </section>

</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>