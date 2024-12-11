<?php 
/**
 * Template Name: Contact Us
 * Description: Page template for the Contact Us page with a sidebar.
 */

get_header(); // Inclure l'en-tête global du thème.

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
?>

<article>
    <?php if (!is_front_page()) : // Afficher le titre uniquement si ce n'est pas la page d'accueil ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
    <?php endif; ?>

    <div class="page-content">
        <?php the_content(); // Affiche le contenu principal de la page ?>
    </div>
</article>

<section class="contacter">
    <h2><?php _e('Coordonnées', 'text-domain'); ?></h2>
    <p>
        <?php echo nl2br(esc_html(get_theme_mod('ligue_contact_details', 'Ligue des droits et libertés
469, Jean-Talon Ouest, bureau 105
Montréal (Québec) H3N 1R4
Téléphone : 514 849-7717
Télécopieur : 514 878-1060
Cell. média : 514 715-7727'))); ?>
    </p>
    <a href="mailto:info@liguedesdroits.ca">info@liguedesdroits.ca</a>
    
    <h2><?php _e('Section de Québec', 'text-domain'); ?></h2>
    <p>
        <?php echo nl2br(esc_html(get_theme_mod('quebec_contact_details', '190-B, rue Dorchester, bureau 70
Québec (Québec) G1K 5Y9
Téléphone : (418) 522-4506
Cellulaire : 581 984-4506'))); ?>
    </p>
    <a href="mailto:info@liguedesdroitsqc.org">info@liguedesdroitsqc.org</a><br>
    <a href="http://liguedesdroitsqc.org">http://liguedesdroitsqc.org/</a>
    <button class="btn-membership"><?php _e('Devenir Membre', 'text-domain'); ?></button>
</section>

<section class="contact-form">
    <h2><?php _e('Contactez-nous', 'text-domain'); ?></h2>
    <form action="mailto:info@liguedesdroits.ca" method="post" enctype="text/plain">
        <div class="form-group">
            <label for="name"><?php _e('Nom', 'text-domain'); ?></label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email"><?php _e('Email', 'text-domain'); ?></label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message"><?php _e('Message', 'text-domain'); ?></label>
            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn-submit"><?php _e('Envoyer', 'text-domain'); ?></button>
    </form>
</section>

<?php 
    endwhile; 
else :
    get_template_part( 'partials/404' ); // Charger le template d'erreur 404
endif;

get_footer(); // Inclure le pied de page global du thème.
