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

<div class="header">
        <a class="navbar-brand" href="./index.html">
            <img src="../pages-statiques-tristan/medias/logo.png" alt="Logo" class="logo" id="logo">
        </a>
        
        <img class="sante-hero" src="../pages-statiques-tristan/medias/sante-hero.jpg" alt="">
        <div class="title-sante">DROIT À LA SANTÉ</div>
    
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services-hub.html" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Luttes</a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="services-hub.html">Toutes les luttes</a>
                            <a class="dropdown-item" href="#">COVID-19</a>
                            <a class="dropdown-item" href="service.html">Droit à la santé</a>
                            <a class="dropdown-item" href="#">Droit d’association</a>
                            <a class="dropdown-item" href="#">Droits des personnes en détention</a>
                            <a class="dropdown-item" href="#">Droits économiques, sociaux et culturels</a>
                            <a class="dropdown-item" href="#">Droits des personnes migrantes</a>
                            <a class="dropdown-item" href="#">Droits des peuples autochtones</a>
                            <a class="dropdown-item" href="#">Environnement et droits humains</a>
                            <a class="dropdown-item" href="#">Liberté d’expression</a>
                            <a class="dropdown-item" href="#">Palestine et droits humains</a>
                            <a class="dropdown-item" href="#">Police et mécanismes de surveillance</a>
                            <a class="dropdown-item" href="#">Racisme & exclusion sociale</a>
                            <a class="dropdown-item" href="#">Surveillance des populations</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="publicationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Publications</a>
                        <div class="dropdown-menu" aria-labelledby="publicationDropdown">
                            <a class="dropdown-item" href="news-hub.html">Toutes les publications</a>
                            <a class="dropdown-item" href="#">Revue Droits et libertés</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Nouveau numéro – Regards critiques sur l’incarcération</a>
                            <a class="dropdown-item" href="#">Dernier numéro – Éducation et droits humains</a>
                            <a class="dropdown-item" href="#">Tous les numéros de la revue</a>
                            <a class="dropdown-item" href="#">Éditoriaux et chroniques</a>
                            <a class="dropdown-item" href="#">Tous les articles</a>
                            <a class="dropdown-item" href="#">S’informer</a>
                            
                            <a class="dropdown-item" href="#">Toutes les publications</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Carnets</a>
                            <a class="dropdown-item" href="#">Communiqués</a>
                            <a class="dropdown-item" href="#">Déclarations & allocutions</a>
                            <a class="dropdown-item" href="#">Lettres ouvertes</a>
                            <a class="dropdown-item" href="#">Mémoires et représentations</a>
                            <a class="dropdown-item" href="#">Outils d’éducation aux droits</a>
                            <a class="dropdown-item" href="#">Rapports et analyses</a>
                            <a class="dropdown-item" href="#">Vidéos</a>
                         

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="formationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Formations</a>
                        <div class="dropdown-menu" aria-labelledby="formationsDropdown">
                            <a class="dropdown-item" href="#">Ateliers</a>
                            <a class="dropdown-item" href="#">Demander un atelier</a>
                            <a class="dropdown-item" href="#">Outils d’éducation aux droits</a>
                            <a class="dropdown-item" href="#">Lexique</a>
                     
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="contact-us.html" id="propsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nous joindre</a>
                        <div class="dropdown-menu" aria-labelledby="formationsDropdown">
                            <a class="dropdown-item" href="contact-us.html">Contact</a>
                    </li>
                

                    <li class="nav-item dropdown">
                        <a class="nav-link underline" href="#" role="button">Eng</a>
                    </li>
                    
                </ul>
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
