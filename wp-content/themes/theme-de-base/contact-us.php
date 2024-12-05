<?php 
/**
 * 	Template Name: contact-us
 * 	Identique à page, mais avec une barre latérale
 */

 get_template_part( 'partials/headercontact' ); 

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

	<section class="contacter">
        <h2>Coordonées</h2>
        <p>Ligue des droits et libertés </br>
            469, Jean-Talon Ouest, bureau 105</br>
            Montréal (Québec) H3N 1R4</br>
            Téléphone : 514 849-7717</br>
            Télécopieur : 514 878-1060</br>
            Cell. média : 514 715-7727</br>
            <a href="info@liguedesdroits.ca">info@liguedesdroits.ca</a>
        </p>


            <h2>Section de Québec</h2>
        <p>190-B, rue Dorchester, bureau 70
            Québec (Québec) G1K 5Y9 </br> 
            Téléphone : (418) 522-4506 </br>
            Cellulaire : 581 984-4506 </br>
            <a href="info@liguedesdroitsqc.org">info@liguedesdroitsqc.org</a></br>
            <a href="http://liguedesdroitsqc.org">http://liguedesdroitsqc.org/</a>
        </p>
        <button>DEVENIR MEMBRE</button>
    </section>
    
    <section class="contact-form">
        <h2>Contactez-nous</h2>
        <form action="mailto:info@liguedesdroits.ca" method="post" enctype="text/plain">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
            </div>
    
            <button type="submit" class="btn-submit">Envoyer</button>
        </form>
    </section>



<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>