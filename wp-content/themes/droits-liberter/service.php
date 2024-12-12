<?php
/**
 * Template Name: services-sante
 * Template Post Type: page, service
 * This template is for displaying a services page with additional related content sections
 */

get_template_part('partials/headerservice'); // Include custom header for services page

if (have_posts()) : // Check if there are pages to display?
    while (have_posts()) : the_post();
?>


<!-- Section displaying information about the service -->
<section class="section-text">
    <div class="section-p">
        <h2 class="section-title">Droit à la santé</h2>
        <p><strong>La Ligue des droits et libertés interpelle l’Agence Santé Québec</strong></p>
        <p>Montréal, le 30 octobre 2024 - La Ligue des droits et libertés (LDL) informe qu’elle a fait parvenir une lettre aux membres du conseil d’administration de l’Agence Santé Québec afin de leur rappeler leurs obligations en ce qui concerne le droit à la santé. Le droit à la santé fait partie des droits humains, dont toute personne est titulaire, et qui engagent pour l’État des obligations de respect, de protection et de mise en œuvre.</p>
        <p>À titre de nouvelle agence responsable de coordonner les activités du réseau sur le terrain, les membres du CA de l’Agence Santé Québec sont des détenteurs de charge publique et doivent également se considérer responsables et redevables pour l’exercice du droit à la santé des Québécois-e-s.</p>
        <p>La LDL appuie sa définition du droit à la santé sur celle développée par le droit international des droits de la personne. La santé réfère au meilleur état de santé physique, mental et social qu’il est possible pour toute personne d’atteindre. Le gouvernement québécois a reconnu cette définition notamment en ratifiant le Pacte international relatif aux droits économiques, sociaux et culturels en 1976, ce qui implique qu’il a pour responsabilité de respecter, protéger et mettre en œuvre le droit à la santé.</p>
        <p><strong>Citation:</strong> « La création de l’Agence Santé Québec découle du projet de loi 15 qui a été adopté sous bâillon l’an dernier malgré des fortes oppositions. Cela fait partie plus largement du plan Santé du gouvernement actuel... »</p>
    </div>
</section>

<section class="news-section-services">
    <div class="news-header">
        <h2 class="title"><?php echo get_field("title-banner"); // Title for the section ?></h2>
    </div>
    <div class="news-cards">
        <?php
        $arguments = array(
            'post_type' => 'service',
            's' => 'DROIT À LA SANTÉ', // Search keyword
        );
        $projects = new WP_Query($arguments);

        if ($projects->have_posts()) : 
            while ($projects->have_posts()) : $projects->the_post();
        ?>
                <div class="news-card">
                    <!-- Image -->
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p> <!-- Display content trimmed to 20 words -->
                    <a href="<?php the_permalink(); ?>" class="news-details">Plus de détails →</a>
                </div>
        <?php
            endwhile;
            wp_reset_postdata(); // Reset the post data after the loop
        else : 
        ?>
            <p>Aucune actualité disponible.</p> <!-- Fallback message if no posts are found -->
        <?php endif; ?>
    </div>
</section>



<!-- Additional services carousel or similar component -->
<section class="autres-services">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            // WP Query to fetch posts (or services)
            $args = array(
                'post_type' => 'service', // Replace with your custom post type if necessary
                'posts_per_page' => 16,  // Adjust the number of posts to show
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="swiper-slide">
                        <h1><?php the_title(); ?></h1>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();  // Reset the post data after the loop
            else :
            ?>
                <p>Aucun service trouvé.</p>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Swiper navigation buttons and counter below the image carousel -->
    <div class="swiper-navigation">
        <div class="swiper-button-prev">Service précédent</div>
        <div id="slide-counter">1 / 16</div>
        <div class="swiper-button-next">Service suivant</div>
    </div>
</section>

<?php
    endwhile; // End of the loop
else :
    get_template_part('partials/404'); // Show the 404 template if no pages are found
endif;


get_footer(); // Include the footer
?>
