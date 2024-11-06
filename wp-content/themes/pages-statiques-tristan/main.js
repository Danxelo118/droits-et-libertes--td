gsap.to("#logo", {
    rotation: 360,
    duration: 5,
    repeat: -1, // Infinite repeat
    ease: "linear"
});

// Activer le plugin ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// Sélectionner tous les éléments de bullet-item
const items = document.querySelectorAll('.bullet-item');

// Créer une timeline pour l'animation globale
const tl = gsap.timeline({
    scrollTrigger: {
        trigger: ".container",
        start: "-60% top",
        end: "bottom -50%",
        scrub: 1,
        pin: true,
    }
});

// Parcourir chaque élément et appliquer l'animation
items.forEach((item, index) => {
    tl.fromTo(item, 
        { opacity: 0, scale: 1.5, y: 20 },
        { opacity: 1, scale: 1, y: 0, duration: 20, ease: "power2.out" },
        `+=4`
    )
    .to(item, 
        { opacity: 0, duration: 1, ease: "power2.in" },
        `+=4`
    );
});

document.addEventListener("DOMContentLoaded", function() {
    // Register ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Animate the red title
    gsap.fromTo(".title-red", 
        { y: 0 },
        { 
            y: -40, 
            duration: 1,
            scrollTrigger: {
                trigger: ".title-red",
                start: "top 30%",
                end: "top 80%",
                scrub: 1,
        
            }
        }
    );

    // Animate the yellow title
    gsap.fromTo(".title-yellow", 
        { y: 0 },
        { 
            y: 40, 
            duration: 1,
            scrollTrigger: {
                trigger: ".title-yellow",
                start: "top 30%",
                end: "top 80%",
                scrub: 1,
             
            }
        }
    );
});
const swiper = new Swiper('.mySwiper', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        slideChange: function () {
            const currentSlide = swiper.realIndex + 1;
            const totalSlides = swiper.slides.length - 2;
            document.getElementById('slide-counter').innerText = `${currentSlide} / ${totalSlides}`;
        },
    },
});




