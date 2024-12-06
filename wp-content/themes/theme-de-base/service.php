<?php
/**
 * Template Name: services-hub
 * Template Post Type: page, service
 * This template is for displaying a services page with additional related content sections
 */

get_template_part('partials/headerservice'); // Include custom header for services page

if (have_posts()) : // Check if there are pages to display?
    while (have_posts()) : the_post();
?>

<article>
    <?php if (!is_front_page()) : ?>
        <h2><?php the_title(); ?></h2> <!-- Title of the page -->
    <?php endif; ?>
    <?php the_content(); ?> <!-- Main content of the page -->
</article>

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

<!-- Related services section -->
<section class="news-section-services">
    <div class="news-header">
        <h2 class="title">LUTTES CONNEXES</h2>
    </div>
    <div class="news-cards">
        <div class="news-card">
            <img src="../pages-statiques-tristan/medias/new1.jpg" alt="Titre 1">
            <h3>Pour l’interdiction des interpellations policières</h3>
            <p>La Ligue des droits et libertés salue ce jugement déterminant dans la lutte au profilage racial à Montréal.</p>
            <a href="lien-vers-detail1" class="news-details">Plus de détails →</a>
        </div>
        <div class="news-card">
            <img src="../pages-statiques-tristan/medias/new2.jpg" alt="Titre 2">
            <h3>Adoption du PL 57 – Les risques sérieux d’atteinte aux droits et libertés</h3>
            <p>Le PL57, adopté le 5 juin 2024 par le gouvernement du Québec, présente des risques sérieux d’atteinte aux droits et libertés.</p>
            <a href="lien-vers-detail2" class="news-details">Plus de détails →</a>
        </div>
        <div class="news-card">
            <img src="../pages-statiques-tristan/medias/new3.jpg" alt="Titre 3">
            <h3>La LDL salue le rejet de la demande d’injonction de l’Université McGill</h3>
            <p>Le rejet par la Cour supérieure de la demande d’injonction intentée par l’Université McGill évite la répression de ce moyen d’action légitime des étudiant-e-s.</p>
            <a href="lien-vers-detail3" class="news-details">Plus de détails →</a>
        </div>
        <!-- More cards can be added here -->
    </div>
</section>

<!-- Additional services carousel or similar component -->
<section class="autres-services">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <h1>DROIT DES PEUPLES AUTOCHTONES</h1>
                <img src="/wp-content/themes/pages-statiques-tristan/medias/tente.jpg" alt="Background Image 1">
            </div>
            <div class="swiper-slide">
                <img src="/wp-content/themes/pages-statiques-tristan/medias/new3.jpg" alt="Background Image 2">
            </div>
            <!-- Add more slides if needed -->
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

get_sidebar(); // Include the sidebar
get_footer(); // Include the footer
?>
