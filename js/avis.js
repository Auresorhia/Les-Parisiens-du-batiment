'use strict';

// AVIS : Carousel

class ReviewCarousel {
  constructor() {
    this.track = document.getElementById('carouselTrack');
    this.prevBtn = document.getElementById('prevBtn');
    this.nextBtn = document.getElementById('nextBtn');
    this.cards = document.querySelectorAll('.review-card');
    this.currentIndex = 0;
    this.cardsPerView = this.getCardsPerView();
                
    this.init();
    this.updateButtons();
                
    // Écouter les changements de taille d'écran
    window.addEventListener('resize', () => {
      this.cardsPerView = this.getCardsPerView();
      this.updateCarousel();
    });
  }
            
  init() {
    this.prevBtn.addEventListener('click', () => this.prev());
    this.nextBtn.addEventListener('click', () => this.next());
  }
            
  getCardsPerView() {
    const width = window.innerWidth;
    if (width >= 1024) return 3; // Desktop
    if (width >= 768) return 2;  // Tablet
    return 1; // Mobile
  }
            
  updateCarousel() {
    const cardWidth = this.cards[0].offsetWidth;
    const gap = 16; // 1rem gap
    const offset = this.currentIndex * (cardWidth + gap);
    this.track.style.transform = `translateX(-${offset}px)`;
    this.updateButtons();
  }
            
  updateButtons() {
    const maxIndex = Math.max(0, this.cards.length - this.cardsPerView);
      this.prevBtn.disabled = this.currentIndex === 0;
      this.nextBtn.disabled = this.currentIndex >= maxIndex;
  }
            
  prev() {
    if (this.currentIndex > 0) {
      this.currentIndex--;
      this.updateCarousel();
    }
  }
            
  next() {
    const maxIndex = Math.max(0, this.cards.length - this.cardsPerView);
    if (this.currentIndex < maxIndex) {
        this.currentIndex++;
        this.updateCarousel();
    }
  }
}
        
// Initialiser le carrousel quand le DOM est chargé
document.addEventListener('DOMContentLoaded', () => {
  new ReviewCarousel();
});