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

const newsData = [
    {
        title: 'Nouvelle Première: Droit à l\'éducation pour tous',
        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.',
        date: '2024-11-02',
        image: 'https://via.placeholder.com/400x250'
    },
    {
        title: 'Actualité 2: Impact des lois récentes sur les droits humains',
        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae facilisis leo.',
        date: '2024-10-29',
        image: 'https://via.placeholder.com/400x250'
    },
    {
        title: 'Actualité 3: Nouveau rapport sur les conditions en détention',
        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id leo dui.',
        date: '2024-10-24',
        image: 'https://via.placeholder.com/400x250'
    },
    // Add more news here...
];

let currentPage = 1;
const newsPerPage = 3;

const loadNews = (sortOrder = 'desc') => {
    const container = document.getElementById('news-cards-container');
    container.innerHTML = ''; // Clear existing news

    // Sort news based on selected order
    const sortedNews = sortOrder === 'asc' ? [...newsData].sort((a, b) => new Date(a.date) - new Date(b.date)) : [...newsData].sort((a, b) => new Date(b.date) - new Date(a.date));

    // Slice the data for the current page
    const newsToDisplay = sortedNews.slice((currentPage - 1) * newsPerPage, currentPage * newsPerPage);

    // Create news cards dynamically
    newsToDisplay.forEach(news => {
        const newsCard = document.createElement('div');
        newsCard.classList.add('news-card');

        const newsCardImage = document.createElement('img');
        newsCardImage.src = news.image;
        newsCardImage.alt = news.title;
        newsCardImage.classList.add('news-card-image');
        newsCard.appendChild(newsCardImage);

        const newsCardBody = document.createElement('div');
        newsCardBody.classList.add('news-card-body');
        newsCard.appendChild(newsCardBody);

        const newsTitle = document.createElement('h3');
        newsTitle.classList.add('news-card-title');
        newsTitle.textContent = news.title;
        newsCardBody.appendChild(newsTitle);

        const newsDescription = document.createElement('p');
        newsDescription.classList.add('news-card-description');
        newsDescription.textContent = news.description;
        newsCardBody.appendChild(newsDescription);

        const newsDate = document.createElement('p');
        newsDate.classList.add('news-card-date');
        newsDate.textContent = `Publié le ${news.date}`;
        newsCardBody.appendChild(newsDate);

        const readMoreButton = document.createElement('button');
        readMoreButton.classList.add('read-more-btn');
        readMoreButton.textContent = 'Lire la suite';
        newsCardBody.appendChild(readMoreButton);

        container.appendChild(newsCard);
    });

    // Toggle "Voir plus de nouvelles" button visibility
    const totalNews = newsData.length;
    if (currentPage * newsPerPage >= totalNews) {
        document.getElementById('load-more-btn').style.display = 'none';
    } else {
        document.getElementById('load-more-btn').style.display = 'inline-block';
    }
};

// Handle "Voir plus de nouvelles" button click
//document.getElementById('load-more-btn').addEventListener('click', () => {
//    currentPage++;
//    loadNews(document.getElementById('news-sort').value);
//});

// Handle sorting change
//document.getElementById('news-sort').addEventListener('change', (e) => {
 //   loadNews(e.target.value);
//});

// Load initial news
//loadNews();


window.onload = function() {
    const banner = document.getElementById('promo-banner');
    const closeButton = document.getElementById('close-banner');

    if (localStorage.getItem('bannerClosed') === 'true') {
        banner.style.display = 'none';
    }


    closeButton.onclick = function() {
        banner.style.display = 'none';
        localStorage.setItem('bannerClosed', 'true');
    }
};




