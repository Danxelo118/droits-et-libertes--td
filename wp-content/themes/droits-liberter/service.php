<?php
/**
 * Template Name: services-sante
 * Template Post Type: page, service
 * Ce modèle est utilisé pour afficher une page de services avec des sections de contenu supplémentaires liées
 */

// Inclusion d'un en-tête personnalisé pour la page des services
get_template_part('partials/headerservice'); 

if (have_posts()) : // Vérifie s'il y a des pages à afficher
    while (have_posts()) : the_post();
?>

<!-- Section affichant les informations sur les services -->
<section class="section-text">
    <div class="section-p">
        <h2 class="section-title">Droit à la santé</h2>
        <p><strong>La Ligue des droits et libertés interpelle l’Agence Santé Québec</strong></p>
        <p>Montréal, le 30 octobre 2024 - La Ligue des droits et libertés (LDL) informe qu’elle a fait parvenir une lettre aux membres du conseil d’administration de l’Agence Santé Québec afin de leur rappeler leurs obligations en ce qui concerne le droit à la santé...</p>
        <!-- Texte détaillant les responsabilités et obligations concernant le droit à la santé -->
        <p>À titre de nouvelle agence responsable de coordonner les activités du réseau sur le terrain...</p>
        <p><strong>Citation:</strong> « La création de l’Agence Santé Québec découle du projet de loi 15... »</p>
    </div>
</section>

<!-- Section affichant les actualités ou services liés -->
<section class="news-section-services">
    <div class="news-header">
        <h2 class="title"><?php echo get_field("title-banner"); // Affiche le titre de la section ?></h2>
    </div>
    <div class="news-cards">
        <?php
        // Requête personnalisée pour obtenir les services liés au "DROIT À LA SANTÉ"
        $arguments = array(
            'post_type' => 'service',
            's' => 'DROIT À LA SANTÉ', 
        );
        $projects = new WP_Query($arguments);

        if ($projects->have_posts()) : 
            while ($projects->have_posts()) : $projects->the_post();
        ?>
                <div class="news-card">
                    <!-- Affiche l'image, le titre et un résumé du contenu du service -->
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p> 
                    <a href="<?php the_permalink(); ?>" class="news-details">Plus de détails →</a>
                </div>
        <?php
            endwhile;
            wp_reset_postdata(); // Réinitialise les données après la boucle
        else : 
        ?>
            <p>Aucune actualité disponible.</p> <!-- Message si aucun service trouvé -->
        <?php endif; ?>
    </div>
</section>

<!-- Section affichant un carrousel de services supplémentaires -->
<section class="autres-services">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            // Requête pour récupérer les services
            $args = array(
                'post_type' => 'service', // Type de contenu personnalisé "service"
                'posts_per_page' => 16,  // Nombre de services à afficher
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="swiper-slide">
                        <!-- Affiche le titre et l'image du service -->
                        <h1><?php the_title(); ?></h1>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Réinitialise les données après la boucle
            else :
            ?>
                <p>Aucun service trouvé.</p> <!-- Message si aucun service n'est trouvé -->
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Navigation du carrousel et compteur de diapositives -->
    <div class="swiper-navigation">
        <div class="swiper-button-prev">Service précédent</div>
        <div id="slide-counter">1 / 16</div>
        <div class="swiper-button-next">Service suivant</div>
    </div>
</section>

<?php
    endwhile; // Fin de la boucle
else :
    get_template_part('partials/404'); // Affiche le modèle 404 si aucune page n'est trouvée
endif;

// Inclusion du pied de page
get_footer(); 
?>
