<?php 
/**
 * 	Template Name: news-article
 * 	Template Post Type: post, page, article 
 */

 get_template_part( 'partials/headerarticle' ); 

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<div class="bg">

    <section class="new-section">
        <h2 class="section-title"><?php the_title(); // Titre de la page ?></h2>
        <p class="section-text"> <?php the_content(); // Contenu principal de la page ?> </p>
    
        <div class="section-image">
         <div class="full-width-image"><?php the_post_thumbnail('thumbnail'); ?></div>
		 <img src="" alt="Montréal Racial Profiling Judgment" class="full-width-image">
        </div>
    </section>
    
    <section class="new-section">
        <h2 class="section-title2">FAITS SAILLANTS</h2>
        <p class="section-text">
            Une interpellation (street check) est un contrôle d’identité arbitraire dans l’espace public. C’est une situation où un policier tente d’obtenir l’identité d’une personne et de recueillir des informations auprès d’elle, alors que la personne n’a aucune obligation légale de s’identifier, ni de répondre aux questions. Les informations peuvent ensuite être enregistrées par le policier dans une base de données à des fins de renseignements policiers, ce qui constitue une collecte abusive d’informations. Dans le langage commun, il arrive souvent que le mot interpellation soit utilisé pour nommer tous les types d’interaction avec la police, incluant l’interception d’automobilistes, l’arrestation ou la détention. Cette situation est souvent une cause de confusion dans le débat public sur les interpellations.
            <br><br>
            L’outil 10 Questions et réponses publié en février 2023 permet de clarifier le sens que donnent les services de police au mot interpellation, tout en expliquant pourquoi il est nécessaire d’interdire formellement cette pratique policière arbitraire.
            <br><br>
            Déclaration, Pour l’interdiction des interpellations policières (street checks) au Québec : <a href="https://liguedesdroits.ca/declaration-interdiction-interpellations-quebec/" target="_blank">https://liguedesdroits.ca/declaration-interdiction-interpellations-quebec/</a>
        </p>
    </section>
    
    <section class="new-section">
        <h2 class="section-title2">À PROPOS DE LA LIGUE DES DROITS ET LIBERTÉS</h2>
        <p class="section-text">
            Depuis 1963, la Ligue des droits et libertés (LDL) a influencé plusieurs politiques gouvernementales et projets de loi en plus de contribuer à la création d’institutions vouées à la défense et la promotion des droits humains. Elle intervient régulièrement dans l’espace public pour porter des revendications et dénoncer des violations de droits auprès des instances gouvernementales sur la scène locale, nationale ou internationale. Son travail d’analyse, de sensibilisation et de promotion est primordial pour que les droits humains deviennent la voie à suivre vers une société juste et inclusive, pour tous et toutes. Comme organisme sans but lucratif, indépendant et non partisan, la LDL vise à défendre et à promouvoir l’universalité, l’indivisibilité et l’interdépendance des droits reconnus dans la Charte internationale des droits de l’homme.
        </p>
    </section>

</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>