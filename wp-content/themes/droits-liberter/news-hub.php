<?php 
/**
 * 	Template Name: news-hub
 * 	Template Post Type: post, page, article, nouvelle, 
 *  * Identique à page, mais avec une barre latérale
 */

 get_template_part( 'partials/headerarticlehub' ); 

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>



	<section class="actualites-hub">
        <div class="hero-container">
            <div class="hero-text">
                <h1 class="hero-title"><?php echo get_field("title-banner"); // Titre de la page ?></h1>
                <p class="hero-description"><?php echo get_field("description-banner"); // Titre de la page ?></p>
            </div>
        </div>

        <div class="sorting-container">
            <label for="news-sort" class="sorting-label"><?php echo get_field("label-title"); // Titre de la page ?></label>
            <select id="news-sort" class="form-control">
                <option value="desc"><?php echo get_field("label-insert1"); // Titre de la page ?></option>
                <option value="asc"><?php echo get_field("label-insert2"); // Titre de la page ?></option>
            </select>
        </div>

        
        <div class="news-cards-container" id="news-cards-container">



    
        <div class="news-card2 featured-news-card">
        <a href="<?php echo home_url('/nouvelle/pour-linterdiction-desinterpellations-policieresune-bonne-fois-pour-toute/'); ?>">            
    <?php
    $arguments = array(
        'post_type' => 'nouvelle',
        's' => 'POUR L’INTERDICTION DESINTERPELLATIONS POLICIÈRESUNE BONNE FOIS POUR TOUTE',
    );
    $projects = new WP_Query($arguments);
    while ($projects->have_posts()) : $projects->the_post();
    ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="news-card-image">
        <div class="news-card-body">
            <h3 class="news-card-title"><?php the_title(); ?></h3>
            <div class="news-card-description white"><?php the_content('card-summary'); ?></div>
            <div class="carte-textes-date"><?php the_field('card-date'); ?></div>
            <div class="news-card-date white"><?php echo get_the_date(); ?></div>
           
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
    </a>
</div>


        


 <?php
$arguments = ["post_type" => "nouvelle", "posts_per_page" => 5];
$news_query = new WP_Query($arguments);
while ($news_query->have_posts()):
    $news_query->the_post(); ?> <div class="news-card2"> <a href="<?php the_permalink(); ?>"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="news-card-image"> <div class="news-card-body"> <h3 class="news-card-title"><?php the_title(); ?></h3> <div class="news-card-description"><?php echo wp_trim_words(
    get_the_content(),
    20
); ?></div> <div class="carte-textes-date"><?php the_field(
    "card-date"
); ?></div> <div class="news-card-date"><?php echo get_the_date(); ?></div> </div> </a> </div> <?php
endwhile;
wp_reset_postdata();
?> 





            
          
 


            
            
          
        </div>


        <button class="load-more-news-btn" id="load-more-btn"><?php the_field('boutton'); ?></button>
    </section>
	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>