gsap.to("#logo", {
    rotation: 360,
    duration: 5,
    repeat: -1, // Infinite repeat
    ease: "linear"
});

// Activer le plugin ScrollTrigge
// Activer le plugin ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// Sélectionner tous les éléments de bullet-item
const items = document.querySelectorAll('.bullet-item');

// Créer une timeline pour l'animation globale
const tl = gsap.timeline({
    scrollTrigger: {
        trigger: ".container", // Déclencheur basé sur le conteneur
        start: "-60% top", // Démarre quand le haut du conteneur touche le haut de la fenêtre
        end: "bottom -50%", // Finit quand le bas du conteneur touche le haut de la fenêtre
        scrub: 1, // Synchronise l'animation avec le scroll (encore plus lent)
        markers: true, // Affiche les marqueurs pour le débogage
        pin: true, // Fixe le conteneur
    }
});

// Parcourir chaque élément et appliquer l'animation
items.forEach((item, index) => {
    tl.fromTo(item, 
        { opacity: 0, scale: 1.5, y: 20 }, // État initial : invisible et grand
        { opacity: 1, scale: 1, y: 0, duration: 20, ease: "power2.out" }, // État final : visible et taille normale
        `+=4` // Délai pour éviter le chevauchement (2 secondes entre les éléments)
    )
    .to(item, 
        { opacity: 0, duration: 1, ease: "power2.in" }, // État de disparition : faire disparaître l'élément
        `+=4` // Attendre 2 secondes avant de commencer à faire disparaître l'élément
    );
});

document.addEventListener("DOMContentLoaded", function() {
    // Register ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Animate the red title
    gsap.fromTo(".title-red", 
        { y: 0 }, // Start position
        { 
            y: -40, 
            duration: 1, // Increase duration for a smoother effect
            scrollTrigger: {
                trigger: ".title-red", // Element that triggers the animation
                start: "top 30%", // Start when the title is 30% down the viewport
                end: "top 80%", // End when the title is 80% down the viewport
                scrub: 1, // Smooth scrubbing with a duration of 1 second
                markers: true // Uncomment for debugging
            }
        }
    );

    // Animate the yellow title
    gsap.fromTo(".title-yellow", 
        { y: 0 }, // Start position
        { 
            y: 40, 
            duration: 1, // Increase duration for a smoother effect
            scrollTrigger: {
                trigger: ".title-yellow", // Element that triggers the animation
                start: "top 30%", // Start when the title is 30% down the viewport
                end: "top 80%", // End when the title is 80% down the viewport
                scrub: 1, // Smooth scrubbing with a duration of 1 second
                markers: true // Uncomment for debugging
            }
        }
    );
});
