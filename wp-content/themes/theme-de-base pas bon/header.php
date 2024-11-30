<?php
/**
 * 	Template Name: Header
 * 	Identique à page, mais avec une barre latérale
 */
/*-----------------------------------------------------------------------------------*/
/* Affiche l'entête (Header) sur toutes vos pages
/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>
        <?php bloginfo('name'); // Affiche le nom du blog ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description ?>
    </title>
    
    <?php 
        // Tous les .css et .js sont chargés dans le fichier functions.php
    ?>

    <?php wp_head(); ?>
    <!-- Cette fonction permet à WordPress et aux extensions d'instancier des fichiers CSS et JS dans le <head> -->
</head>

<body <?php body_class(); ?>>
<header>
    <h1>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </h1>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php 
                // Display dynamic WordPress menu in the 'main-menu' location
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => 'navbar-nav',
                    'depth' => 2,  // Ensure dropdown support
                    'fallback_cb' => 'wp_page_menu',
                    'items_wrap' => '%3$s',  // Remove unnecessary wrappers
                    'walker' => new WP_Bootstrap_Navwalker(), // Optional: Adds Bootstrap dropdown functionality
                ));
                ?>
                <li class="nav-item">
                    <a class="nav-link underline" href="#">Eng</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Custom buttons for donation and membership -->
    <div class="header-buttons">
        <button class="btn-donner">
            <strong>DONNER</strong>
            <i class="fas fa-wallet button-icon"></i>
        </button>
        <button class="btn-informer">
            <strong>MEMBRE</strong>
        </button>
    </div>
</header>

<main><!-- Débute le contenu principal de notre site -->

