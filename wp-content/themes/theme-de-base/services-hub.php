<?php 
/**
 * 	Template Name: services-hub
 *  Template post type : page
 * 	Identique à page, mais avec une barre latérale
 */

 get_template_part( 'partials/headerservicehub' );  // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>

	<section class="liste-services">
        <ul>
            <li><a href="">COVID-19</a></li>
            <li><a href="droits-sante.html">Droit à la santé</a></li>
            <li><a href="">Droit d'association</a></li>
            <li><a href="">Droit des personnes en détention</a></li>
            <li><a href="">Droit économiques, sociaux et culturels</a></li>
            <li><a href="">Droit des personnes migrantes</a></li>
            <li><a href="">Droit des peuples autochtones</a></li>
            <li><a href="">Environnement et droits humains</a></li>
            <li><a href="">Liberté d'expression</a></li>
            <li><a href="">Palestine et droits humains</a></li>
            <li><a href="">Police et mécanismes de surveillance</a></li>
            <li><a href="">Racisme et exclusion sociale</a></li>
            <li><a href="">Surveillance des populations</a></li>
        </ul>
        
    </section>


    <section class="news-section-services">
        <div class="news-header">
            <h2 class="title">LUTTES CONNEXES</h2>
        </div>
        <div class="news-cards">
            <div class="news-card">
                <img src="../pages-statiques-tristan/medias/covid.jpg" alt="Titre 1">
                <h3>COVID-19</h3>
                <a href="service.html" class="news-details">Plus de détails →</a>
            </div>
            <div class="news-card">
                <img src="../pages-statiques-tristan/medias/sante-hero.jpg" alt="Titre 2">
                <h3>Droit à la santé</h3>
                <a href="service.html" class="news-details">Plus de détails →</a>
            </div>
            <div class="news-card">
                <img src="../pages-statiques-tristan/medias/apropos-hero.jpg" alt="Titre 3">
                <h3>Droit d'association</h3>
                <a href="service.html" class="news-details">Plus de détails →</a>
            </div>
            <div class="news-card">
                <img src="../pages-statiques-tristan/medias/new6.jpg" alt="Titre 4">
                <h3>Droit des personnes en détention</h3>
                <a href="service.html" class="news-details">Plus de détails →</a>
            </div>
            <div class="news-card">
                <img src="../pages-statiques-tristan/medias/new2.jpg" alt="Titre 5">
                <h3>Droit économiques, sociaux et culturels</h3>
                <a href="service.html" class="news-details">Plus de détails →</a>
            </div>
            <div class="news-card">
                <img src="../pages-statiques-tristan/medias/migrant.jpg" alt="Titre 6">
                <h3>Droit des personnes migrantes</h3>
                <a href="service.html" class="news-details">Plus de détails →</a>
            </div>
        </div>
    </section>
    




<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>