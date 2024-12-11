<?php
/**
 * Template Name: services-hub
 * Template Post Type: page
 * Identique à page, mais avec une barre latérale
 */

get_template_part('partials/headerservicehub'); // Affiche headerservicehub.php

if (have_posts()) : // Est-ce que nous avons des pages à afficher ?
    while (have_posts()) : the_post();
?>



<<section class="liste-services">
    <h2 class="section-title">Nos services</h2>
    <ul>
        <?php
        // Query all posts of the 'service' custom post type
        $args = array(
            'post_type' => 'service', // The custom post type for services
            'posts_per_page' => -1,   // Get all posts
            'post_status' => 'publish' // Only published posts
        );
        $services_query = new WP_Query($args);

        // Loop through the services and display them
        if ($services_query->have_posts()) :
            while ($services_query->have_posts()) : $services_query->the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
            endwhile;
        else :
            echo '<li>No services available.</li>';
        endif;

        // Reset the post data
        wp_reset_postdata();
        ?>
    </ul>
</section>


<section class="news-section-services">
    <div class="news-header">
        <h2 class="title">Luttes connexes</h2>
    </div>
    <div class="news-cards">
        <?php
        // Query for related 'news' or 'services' posts
        $related_services_args = array(
            'post_type' => 'service', // Assuming related services are fetched here
            'posts_per_page' => 6, // Limit number of related posts
        );
        $related_services_query = new WP_Query($related_services_args);

        if ($related_services_query->have_posts()) :
            while ($related_services_query->have_posts()) : $related_services_query->the_post();
        ?>
                <div class="news-card">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo do_shortcode(get_the_content()); ?></p>

                    <a href="<?php the_permalink(); ?>" class="news-details">Plus de détails →</a>
                </div>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <div class="news-card">Aucun article connexe trouvé</div>
        <?php endif; ?>
    </div>
</section>

<?php
    endwhile; // Fermeture de la boucle
else :
    get_template_part('partials/404'); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php
?>
