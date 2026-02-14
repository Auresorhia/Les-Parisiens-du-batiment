'use strict';

(() => {
    const sliderContainer = document.querySelector('.slider-container');
    const slides = Array.from(document.querySelectorAll('.slide'));
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');

    let currentIndex = 0;

    // Fonction qui retourne combien d'images visibles selon largeur écran
    function getVisibleCount() {
        const w = window.innerWidth;
        if (w >= 1600) return 4;
        if (w >= 1024) return 3;
        if (w >= 768) return 2; // tablette
        return 1; // mobile → 1 image
    }


    // Met à jour l'affichage du slider en décalant le container
    function updateSlider() {
        const visibleCount = getVisibleCount();
        if (currentIndex > slides.length - visibleCount) {
            currentIndex = Math.max(0, slides.length - visibleCount);
        }
        // Décalage en pourcentage basé sur le nombre de slides visibles
        const slidePercent = 100 / visibleCount;
        const offsetPercent = currentIndex * slidePercent;
        sliderContainer.style.transform = `translateX(-${offsetPercent}%)`;
    }


    prevBtn.addEventListener('click', () => {
        currentIndex = Math.max(0, currentIndex - 1);
        updateSlider();
    });

    nextBtn.addEventListener('click', () => {
        const visibleCount = getVisibleCount();
        if (currentIndex < slides.length - visibleCount) {
            currentIndex++;
            updateSlider();
        }
    });

    window.addEventListener('resize', () => {
        updateSlider();
    });

    // Initial setup
    updateSlider();
})()