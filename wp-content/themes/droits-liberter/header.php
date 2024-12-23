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
        <p><strong><?php the_field('top1header'); ?><a href="https://liguedesdroits.ca/" target="_blank"><?php the_field('top2header'); ?></a></strong></p>
        <button id="close-banner">X</button>
    </div>

    <div class="header">
    <div class="header">
        <a class="navbar-brand" href="<?php echo home_url('/index'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/medias/logo.png" alt="Logo" class="logo" id="logo"> 
         
        </a>
    <div class="overlay-text1"><?php the_title(); ?>
      </div>
    <div class="overlay-text2"><?php the_content('card-summary'); ?></div>
    <img src="../pages-statiques-tristan/medias/fond.png" alt="">
    <video autoplay loop muted>
        <source src="<?php echo get_template_directory_uri(); ?>/medias/header.mp4" type="video/mp4">
      
    </video>

    
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
            <strong><?php the_field('boutton1header'); ?></strong>
            <i class="fas fa-wallet button-icon"></i>
        </button>
        <button class="btn-informer">
            <strong><?php the_field('boutton2header'); ?></strong>
        </button>
    </div>
</div>

</header>

<main><!-- Débute le contenu principal de notre site -->
