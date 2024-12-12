<?php
/**
 * Template Name: services-hub
 * Template Post Type: page
 * Identique à page, mais avec une barre latérale
 */

// Inclut le fichier headerservicehub.php
get_template_part('partials/headerservicehub'); 

// Vérifie si des pages sont disponibles pour affichage
if (have_posts()) : 
    // Démarre la boucle pour afficher les pages
    while (have_posts()) : the_post();
?>

<!-- Section pour afficher la liste des services -->
<section class="liste-services">
    <h2 class="section-title">Nos services</h2>
    <ul>
        <?php
        // Définit les arguments pour la requête de services
        $args = array(
            'post_type' => 'service', // Le type de publication personnalisé pour les services
            'posts_per_page' => -1,   // Récupère tous les posts
            'post_status' => 'publish' // Seulement les posts publiés
        );
        
        // Crée une nouvelle requête pour les services
        $services_query = new WP_Query($args);

        // Vérifie si des services sont disponibles
        if ($services_query->have_posts()) :
            // Démarre la boucle pour afficher les services
            while ($services_query->have_posts()) : $services_query->the_post();
                ?>
                <!-- Affiche le titre du service avec un lien vers la page du service -->
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
            endwhile;
        else :
            // Affiche un message si aucun service n'est disponible
            echo '<li>No services available.</li>';
        endif;

        // Réinitialise les données de publication
        wp_reset_postdata();
        ?>
    </ul>
</section>

<!-- Section pour afficher les actualités liées -->
<section class="news-section-services">
    <div class="news-header">
        <h2 class="title">Luttes connexes</h2>
    </div>
    <div class="news-cards">
        <?php
        // Définit les arguments pour la requête d'actualités liées
        $related_services_args = array(
            'post_type' => 'service-hub', // Type de publication personnalisé pour les actualités liées
            'posts_per_page' => 6, // Limite le nombre d'actualités liées
        );
        
        // Crée une nouvelle requête pour les actualités liées
        $related_services_query = new WP_Query($related_services_args);

        // Vérifie si des actualités liées sont disponibles
        if ($related_services_query->have_posts()) :
            // Démarre la boucle pour afficher les actualités liées
            while ($related_services_query->have_posts()) : $related_services_query->the_post();
        ?>
                <!-- Affiche une carte pour chaque actualité liée -->
                <div class="news-card">
                    <!-- Affiche l'image de la carte -->
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <!-- Affiche le titre de la carte -->
                    <h3><?php the_title(); ?></h3>
                    <!-- Affiche le contenu de la carte -->
                    <p><?php echo do_shortcode(get_the_content()); ?></p>

                    <!-- Affiche un lien pour plus de détails -->
                    <a href="<?php the_permalink(); ?>" class="news-details">Plus de détails →</a>
                </div>

        <?php
            endwhile;
            // Réinitialise les données de publication
            wp_reset_postdata();
        else :
        ?>
            <!-- Affiche un message si aucune actualité liée n'est disponible -->
            <div class="news-card">Aucun article connexe trouvé</div>
        <?php endif; ?>
    </div>
</section>

<?php
    // Ferme la boucle pour afficher les pages
    endwhile; 
else :
    // Inclut le fichier 404.php si aucune page n'est disponible
    get_template_part('partials/404'); 
endif;

// Inclut le fichier footer.php
get_footer(); 
?>