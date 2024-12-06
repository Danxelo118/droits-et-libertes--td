<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>

<div class="footer-container">
            <div class="footer-buttons">
                <button class="btn-donner"><strong>DONNER</strong><i class="fas fa-wallet button-icon"></i></button>
                <button class="btn-informer"><strong>S'INFORMER</strong><i class="fas fa-wallet button-icon"></i></button>
                <button class="btn-membre"><strong>DEVENIR MEMBRE</strong></button>
            </div>
    
            <div class="no1">
                <div class="logo-footer">
                    <a href="./index.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/medias/logo.png" alt="logo-footer">
                    </a>
                </div>
                <div class="contact-info">
                    <a href="#">Ligue des droits et libertés</a>
                    <p>469 Jean-Talon Ouest, bureau 105 <br> Montréal, Québec H3N 1R4</p>
                    <p>Tél. : 514 849-7717</p>
                    <p>Cell. médias : 514 715-7727</p>
                    <a href="mailto:info@info@liguedesdroits.ca">info@liguedesdroits.ca</a><br>
                    <a href="#">Plan du site</a>
                </div>
            </div>
    
    
    
            <div class="no2">
                <div class="mission">
                    <h4>Mission & Histoire</h4>
                    <p>Fondée en 1963, La Ligue des droits et libertés (LDL) est un organisme sans but lucratif, indépendant
                        et non partisan, qui vise à faire connaître, à défendre et à promouvoir l'universalité,
                        l'indivisibilité et l'interdépendance des droits reconnus dans la Charte internationale des droits
                        de l'Homme.</p>
                </div>
            </div>
    
            <div class="no4">
                <div class="publications">
                    <h4>Publications & Citations</h4>
                    <p>L'objectif premier des publications produites par la LDL est d'alimenter la réflexion sur différents
                        enjeux de droits humains. Ainsi, la reproduction totale ou partielle d'une publication est non
                        seulement permise, mais encouragée, à condition de mentionner la source. </p>
                </div>
            </div>
    
            <div class="no3">
                <div class="footer-bottom">
                    <a href="https://liguedesdroits.ca/">site original</a> <br>
                    <a href="https://github.com/Danxelo118/droits-et-libertes--td">repertoire github</a>
                    <p>©2024 Intégrateur : Daniel Dezemma (Project Owner, Développeur Back-end & DevOp)</p>
                    <p>Développeur Front-end : Tristan Kadkha (Project Owner, Designer & Assurance Qualité (QA))</p>
                </div>
            
                <!-- Social Media Icons Section -->
                <div class="social-media">
                    <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M8.277 1.356C7.11 1.356 5.994 1.83 5.24 2.643a4.086 4.086 0 0 0-.81 2.374v1.37H3.141v1.762h1.288v4.254h2.272v-4.254h1.515l.261-1.762H6.701V5.333c0-.286.093-.58.26-.832.172-.26.416-.447.69-.534a1.417 1.417 0 0 1 .552-.07h1.293V2.839H8.692a3.31 3.31 0 0 0-.415-.015z"/>
                        </svg>
                    </a>
                    <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14-.003-.282-.01-.422A6.684 6.684 0 0 0 16 3.542a6.56 6.56 0 0 1-1.889.518 3.301 3.301 0 0 0 1.443-1.818 6.573 6.573 0 0 1-2.084.797 3.286 3.286 0 0 0-5.594 2.993 9.325 9.325 0 0 1-6.766-3.431 3.287 3.287 0 0 0 1.018 4.381A3.323 3.323 0 0 1 .64 6.575v.045a3.283 3.283 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.864.115 3.23 3.23 0 0 1-.617-.057 3.288 3.288 0 0 0 3.067 2.282 6.588 6.588 0 0 1-4.862 1.36A9.29 9.29 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.5 0 5.176.01 4.053.067 2.932.123 1.956.383 1.192 1.146.426 1.91.166 2.887.11 4.008.053 5.129 0 5.453 0 8c0 2.547.053 2.871.11 3.992.056 1.121.316 2.098 1.082 2.862.764.763 1.741 1.023 2.862 1.079C5.176 15.99 5.5 16 8 16c2.5 0 2.824-.01 3.947-.067 1.121-.056 2.098-.316 2.862-1.079.764-.764 1.023-1.741 1.079-2.862.057-1.121.11-1.445.11-3.992 0-2.547-.053-2.871-.11-3.992-.056-1.121-.316-2.098-1.079-2.862C13.145.426 12.168.166 11.047.11 9.924.053 9.5 0 8 0zm0 1.6c2.462 0 2.759.01 3.724.067 1.014.057 1.54.236 1.91.606.369.369.548.896.606 1.91.057.965.067 1.262.067 3.724s-.01 2.759-.067 3.724c-.057 1.014-.237 1.54-.606 1.91-.369.369-.896.548-1.91.606-.965.057-1.262.067-3.724.067s-2.759-.01-3.724-.067c-1.014-.057-1.54-.237-1.91-.606-.369-.369-.548-.896-.606-1.91-.057-.965-.067-1.262-.067-3.724s.01-2.759.067-3.724c.057-1.014.237-1.54.606-1.91.369-.369.896-.548 1.91-.606.965-.057 1.262-.067 3.724-.067zm0 3.2a3.2 3.2 0 1 0 0 6.4 3.2 3.2 0 0 0 0-6.4zm0 5.6a2.4 2.4 0 1 1 0-4.8 2.4 2.4 0 0 1 0 4.8zm3.84-6.4a.96.96 0 1 1 0-1.92.96.96 0 0 1 0 1.92z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
        </div>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
</footer>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
