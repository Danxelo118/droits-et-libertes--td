<?php 
/**
 * 	Template Name: news-hub
 * 	Template Post Type: post, page, article, nouvelle, 
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
            <label for="news-sort" class="sorting-label">Trier par:</label>
            <select id="news-sort" class="form-control">
                <option value="desc">Les plus récentes</option>
                <option value="asc">Les plus anciennes</option>
            </select>
        </div>

        
        <div class="news-cards-container" id="news-cards-container">
          
            <div class="news-card2 featured-news-card">
                <img src="../pages-statiques-tristan/medias/flag-3158666_1280.jpg" alt="Actualité 1" class="news-card-image">
                <div class="news-card-body">
                    <h3 class="news-card-title">De passage à Montréal : Francesca Albanese, Rapporteuse spéciale des Nations Unies</h3>
                    <p class="news-card-description white">Complicité des États dans le génocide en Palestine</p>
                    <p class="news-card-date white">Publié le 3 novembre 2024</p>
                    <button class="read-more-btn black">Lire la suite</button>
                </div>
            </div>
        
     
            <div class="news-card2">
                <img src="../pages-statiques-tristan/medias/youth-4513448_1280.jpg" alt="Actualité 2" class="news-card-image">
                <div class="news-card-body">
                    <h3 class="news-card-title">L’enfermement en centre jeunesse</h3>
                    <p class="news-card-description">Lorsqu’un jeune est placé pour sa protection dans une famille d’accueil ou en foyer de groupe et qu’il se met à déconner, très vite, il peut être amené en centre jeunesse. </p>
                    <p class="news-card-date">Publié le 31 octobre 2024</p>
                    <button class="read-more-btn">Lire la suite</button>
                </div>
            </div>
            
            <div class="news-card2">
                <img src="../pages-statiques-tristan/medias/prison-553836_1280.jpg" alt="Actualité 3" class="news-card-image">
                <div class="news-card-body">
                    <h3 class="news-card-title">La LDL alarmée par les conditions de détention et les conditions de libération </h3>
                    <p class="news-card-description"> La Ligue des droits et libertés (LDL) est alarmée par les conditions de remise en liberté imposées aux activistes du pont Jacques-Cartier et dénonce les conditions de détention inhumaines.</p>
                    <p class="news-card-date">Publié le 31 octobre 2024</p>
                    <button class="read-more-btn">Lire la suite</button>
                </div>
            </div>
        
            <div class="news-card2">
                <img src="../pages-statiques-tristan/medias/doctor-563429_1280.jpg" alt="Actualité 4" class="news-card-image">
                <div class="news-card-body">
                    <h3 class="news-card-title">La Ligue des droits et libertés interpelle l’Agence Santé Québec</h3>
                    <p class="news-card-description">
                        La LDL portera une attention particulière à la participation du public aux prises de décisions, à la transparence et à l’imputabilité dans le cadre des activités de l’Agence au cours des prochains mois et années.
                    </p>
                    <p class="news-card-date">Publié le 30 octobre 2024</p>
                    <button class="read-more-btn">Lire la suite</button>
                </div>
            </div>
        
            <div class="news-card2">
                <img src="../pages-statiques-tristan/medias/sante-hero.jpg" alt="Actualité 5" class="news-card-image">
                <div class="news-card-body">
                    <h3 class="news-card-title">Les interceptions routières sans motif sont sources de profilage racial</h3>
                    <p class="news-card-description">Enfin, la LDL souligne le courage de toutes les personnes qui ont témoigné lors des audiences sur les conséquences du profilage racial qu’elles ont subi.

                    </p>
                    <p class="news-card-date">Publié le 24 octobre 2024</p>
                    <button class="read-more-btn">Lire la suite</button>
                </div>
            </div>
        
            <div class="news-card2">
                <img src="../pages-statiques-tristan/medias/align-fingers-71282_1280.jpg" alt="Actualité 6" class="news-card-image">
                <div class="news-card-body">
                    <h3 class="news-card-title">La désobéissance civile au service des droits humains</h3>
                    <p class="news-card-description">La LDL estime que certaines actions, bien qu’illégales, peuvent s’avérer légitimes et nécessaires pour éveiller les consciences et faire bouger les dirigeant-e-s.</p>
                    <p class="news-card-date">Publié le 24 octobre 2024</p>
                    <button class="read-more-btn">Lire la suite</button>
                </div>
            </div>
        </div>
        


            
            
          
        </div>


        <button class="load-more-news-btn" id="load-more-btn">Voir plus de nouvelles</button>
    </section>
	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>