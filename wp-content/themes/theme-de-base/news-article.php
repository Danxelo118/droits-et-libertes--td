<?php 
/**
 * 	Template Name: news-article
 * 	Template Post Type: post, page, article, nouvelle 
 */

 get_template_part( 'partials/headerarticle' ); 

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>








<div class="bg">

    <section class="new-section">
        <h2 class="section-title"><?php echo get_field("nouvelle-title"); // Titre de la page ?></h2>
        <div class="section-text"><?php echo get_field("nouvelle-content"); // Titre de la page ?></div>
    
        <div class="section-image">
		 <img src="<?php echo get_field('image'); ?>" alt="Montréal Racial Profiling Judgment" class="full-width-image">
        </div>
    </section>
    
    <section class="new-section">
        <h2 class="section-title2"><?php echo get_field("nouvelle-title2"); // Titre de la page ?></h2>
        <div class="section-text">
        <?php echo get_field("nouvelle-content2"); // Titre de la page ?>
        </div>
    </section>
    
    <section class="new-section">
        <h2 class="section-title2"><?php echo get_field("nouvelle-title3"); // Titre de la page ?></h2>
        <div class="section-text">
        <?php echo get_field("nouvelle-content3"); // Titre de la page ?>
</div>
    </section>

    <section class="new-section">
        <h2 class="section-title">Publié par:</h2>
        <div class="author-cards">
            <div class="author-card">
                <img src="../pages-statiques-tristan/medias/woman.png" alt="Author 1" class="author-image">
                <div class="author-info">
                    <strong>MYLÈNE SANON</strong>
                    <p>Communiqué de presse pour diffusion immédiate</p>
                </div>
            </div>
            <div class="author-cards">
                <div class="author-card">
                    <img src="../pages-statiques-tristan/medias/woman.png" alt="Author 1" class="author-image">
                    <div class="author-info">
                        <strong>MYLÈNE SANON</strong>
                        <p>Communiqué de presse pour diffusion immédiate</p>
                    </div>
                </div>
            </div>
            <div class="author-cards">
                <div class="author-card">
                    <img src="../pages-statiques-tristan/medias/woman.png" alt="Author 1" class="author-image">
                    <div class="author-info">
                        <strong>MYLÈNE SANON</strong>
                        <p>Communiqué de presse pour diffusion immédiate</p>
                    </div>
                </div>
        </div>
    </section>

    <section class="custom-section2">
        <div class="swiper-navigation2">
            <div class="swiper-button-prev2">NOUVELLE <br> PRÉCÉDENTE</div>
            <div id="slide-counter2">1 / 16</div>
            <div class="swiper-button-next2">NOUVELLE <br> SUIVANTE</div>
        </div>
    </section>


    <section class="news-section-nouvelles">
        <div class="news-header">
            <h2 class="title">ARTICLE RELIÉS</h2>
        </div>
        <div class="news-cards yes">
            <div class="news-card ">
                <img src="../pages-statiques-tristan/medias/new1.jpg" alt="Titre 1">
                <h3>Pour l’interdiction des interpellations policières une bonne fois pour toute</h3>
                <p>La Ligue des droits et libertés salue ce jugement déterminant dans la lutte au profilage racial à Montréal. </p>
                <a href="lien-vers-detail1" class="news-details">Plus de détails →</a>
            </div>
            <div class="news-card">
                <img src="../pages-statiques-tristan/medias/new2.jpg" alt="Titre 2">
                <h3>Adoption du PL 57 – Les risques sérieux d’atteinte aux droits et libertés demeurent</h3>
                <p>Malgré les amendements apportés, le PL57, adopté le 5 juin 2024 par le gouvernement du Québec, présente des risques sérieux d’atteinte aux droits et libertés des citoyen-ne-s et des organisations de la société civile.</p>
                <a href="lien-vers-detail2" class="news-details">Plus de détails →</a>
            </div>
            <div class="news-card">
                <img src="../pages-statiques-tristan/medias/new3.jpg" alt="Titre 3">
                <h3>La LDL salue le rejet de la demande d’injonction de l’Université McGill</h3>
                <p>Le rejet par la Cour supérieure de la demande d’injonction intentée par l’Université McGill évite la répression de ce moyen d’action légitime des étudiant-e-s.</p>
                <a href="lien-vers-detail3" class="news-details">Plus de détails →</a>
            </div>
           
        </div>


    </section>

</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>