<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="../pages-statiques-tristan/medias/logo.png">
<title>Ligue des droits et libertés</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */

?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>
<div class="promo-banner" id="promo-banner">
        <p><strong>Travail scolaire - <a href="https://liguedesdroits.ca/" target="_blank">Visitez le vrai site web</a></strong></p>
        <button id="close-banner">X</button>
    </div>

    <div class="header">
        <a class="navbar-brand" href="./index.html">
            <img src="../pages-statiques-tristan/medias/logo.png" alt="Logo" class="logo" id="logo">
        </a>
        <div class="overlay-text3"></div>
        <img src="../pages-statiques-tristan/medias/fond.png" alt="">
        <img src="../pages-statiques-tristan/medias/new1bw.png" class="nouvelle-hero" alt="">
        <div class="title-nouvelle2">DROIT À LA SANTÉ</BR></div>
        <nav class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">


        <?php wp_nav_menu( array(
                'container' => false,
                'menu_class' => 'navbar-nav ml-auto',
                ) );  ?>


    </div>
</nav>


        <div class="header-buttons">
            <button class="btn-donner">
                <strong>DONNER</strong>
                <i class="fas fa-wallet button-icon"></i>
        
            </button>
            <button class="btn-informer">
                <strong>MEMBRE</strong>
             
            </button>
        </div>


        
        
    </div>

</header>

<main><!-- Débute le contenu principal de notre site -->
