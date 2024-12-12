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

    <section class="new-section">
        <h2 class="section-title"><?php echo get_field("publié");?></h2>
        <div class="author-cards">
            <div class="author-card">
                <img src="<?php echo get_field('author2'); ?>" alt="Author 1" class="author-image">
                <div class="author-info">
                    <strong><?php echo get_field("nameauthor");?></strong>
                    <p><?php echo get_field("descriptionauthor");?></p>
                </div>
            </div>
            <div class="author-cards">
                <div class="author-card">
                    <img src="<?php echo get_field('author2'); ?>" alt="Author 1" class="author-image">
                    <div class="author-info">
                    <strong><?php echo get_field("nameauthor");?></strong>
                    <p><?php echo get_field("descriptionauthor");?></p>
                    </div>
                </div>
            </div>
            <div class="author-cards">
                <div class="author-card">
                    <img src="<?php echo get_field('author3'); ?>" alt="Author 1" class="author-image">
                    <div class="author-info">
                    <strong><?php echo get_field("nameauthor");?></strong>
                    <p><?php echo get_field("descriptionauthor");?></p>
                    </div>
                </div>
        </div>
    </section>

    <section class="custom-section2">
        <div class="swiper-navigation2">
            <div class="swiper-button-prev2"><?php echo get_field("bouttonpre");?></div>
            <div id="slide-counter2">1 / 16</div>
            <div class="swiper-button-next2"><?php echo get_field("bouttonsui");?></div>
        </div>
    </section>


    <section class="news-section-nouvelles">
        <div class="news-header">
            <h2 class="title"><?php echo get_field("articlerel");?></h2>
        </div>
        <div class="news-cards yes">
    <?php
    $arguments = array(
        'post_type' => 'nouvelle',
        'posts_per_page' => 3, 
    );
    $news_query = new WP_Query($arguments);
    while ($news_query->have_posts()) : $news_query->the_post();
    ?>
        <div class="news-card">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
            <a href="<?php the_permalink(); ?>" class="news-details">Plus de détails →</a>
        </div>
    <?php 
    endwhile;
    wp_reset_postdata();
    ?>
</div>


    </section>

</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>