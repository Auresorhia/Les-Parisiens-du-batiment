'use strict';

// MENU BURGER
const burger = document.getElementById("burger");
const navLinks = document.getElementById("nav-link");

if (burger && navLinks) {
  burger.addEventListener("click", () => {
    const isExpanded = burger.getAttribute('aria-expanded') === 'true';
    burger.setAttribute('aria-expanded', !isExpanded);
    navLinks.classList.toggle("active");
  });
}

// SOUS MENU
document.addEventListener('DOMContentLoaded', function () {
  const setupMobileMenu = () => {
    // Supprimer les anciens écouteurs (évite les doublons si resize)
    document.querySelectorAll('.has-submenu > a').forEach(link => {
      const newLink = link.cloneNode(true);
      link.replaceWith(newLink);
    });

    if (window.innerWidth < 1024) {
      document.querySelectorAll('.has-submenu > a').forEach(link => {
        link.addEventListener('click', function (e) {
          const submenu = this.nextElementSibling;

          if (!submenu || !submenu.classList.contains('submenu')) return;

          e.preventDefault();

          const isOpen = submenu.classList.contains('open');

          // Ferme tous les autres sous-menus
          document.querySelectorAll('.submenu.open').forEach(openMenu => {
            openMenu.classList.remove('open');
          });
          
          document.querySelectorAll('.has-submenu > a').forEach(menuLink => {
            menuLink.setAttribute('aria-expanded', 'false');
          });

          // Si ce n'était pas déjà ouvert, on l'ouvre
          if (!isOpen) {
            submenu.classList.add('open');
            this.setAttribute('aria-expanded', 'true');
          }
        });
      });

      // Fermer si clic en dehors
      document.addEventListener('click', function (e) {
        const clickedInside = e.target.closest('.has-submenu');
        if (!clickedInside) {
          document.querySelectorAll('.submenu.open').forEach(openMenu => {
            openMenu.classList.remove('open');
          });
          document.querySelectorAll('.has-submenu > a').forEach(menuLink => {
            menuLink.setAttribute('aria-expanded', 'false');
          });
        }
      });
    }
  };

  setupMobileMenu();

  window.addEventListener('resize', () => {
    setupMobileMenu();
  });
});





// NAVIGATION ONE PAGE + OFFSET

document.addEventListener("DOMContentLoaded", () => {
  // On récupère le chemin
  const pathname = window.location.pathname;

  // Cible tous les liens avec un hash (ancres internes)
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
      const hash = this.getAttribute('href');

      // Si on est déjà sur la page d'accueil
      if (pathname === "/" || pathname === "/index.php") {
        // Empêche le comportement par défaut pour faire scroll doux
        e.preventDefault();

        const targetId = hash.substring(1);
        const target = document.getElementById(targetId);

        if (target) {
          const getOffset = () => (window.innerWidth < 768 ? 100 : 150);
          const headerOffset = getOffset();
          const elementPosition = target.offsetTop - headerOffset;

          window.scrollTo({
            top: elementPosition,
            behavior: 'smooth'
          });
        }
      } else {
        // Sinon on est sur une autre page → on redirige vers la page d'accueil avec l'ancre
        e.preventDefault();
        window.location.href = "/" + hash;
      }
    });
  });
});




// FOOTER : accordéon
document.addEventListener('DOMContentLoaded', () => {
  const contactToggle = document.getElementById('contact-triangle');
  const contactInfo = document.getElementById('contact-info');
  const contactButton = document.getElementById('contact-toggle');

  if (contactToggle && contactInfo && contactButton) {
    contactToggle.addEventListener('click', () => {
      const isOpen = contactInfo.classList.contains('open');
      
      contactInfo.classList.toggle('open');
      contactButton.setAttribute('aria-expanded', !isOpen);
      contactInfo.setAttribute('aria-hidden', isOpen);
    });
  }
});


// Animations avec respect des préférences utilisateur
document.addEventListener('DOMContentLoaded', () => {
  // Vérifier si l'utilisateur préfère des animations réduites
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  
  if (!prefersReducedMotion) {
    const fadeElements = document.querySelectorAll('[class*="fade-in-up"]');

    const appearOnScroll = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          appearOnScroll.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    fadeElements.forEach(el => {
      appearOnScroll.observe(el);
    });
  } else {
    // Si l'utilisateur préfère des animations réduites, afficher directement
    document.querySelectorAll('[class*="fade-in-up"]').forEach(el => {
      el.classList.add('visible');
    });
  }
});

// Gestion du focus pour le skip link
document.addEventListener('DOMContentLoaded', () => {
  const skipLink = document.querySelector('.skip-link');
  if (skipLink) {
    skipLink.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector(skipLink.getAttribute('href'));
      if (target) {
        target.setAttribute('tabindex', '-1');
        target.focus();
      }
    });
  }
});

// Suppression des écouteurs d'événements obsolètes (beforeunload/unload)
// Ne plus utiliser window.addEventListener('beforeunload') ou window.addEventListener('unload')
// Utiliser Page Visibility API à la place si nécessaire
document.addEventListener('visibilitychange', () => {
  if (document.visibilityState === 'hidden') {
    // Code à exécuter quand la page devient invisible
    // Remplace l'usage obsolète de beforeunload/unload
  }
});




//SWIPE : Avis
function goToSection(sectionId) {
  const isHome = window.location.pathname.endsWith('index.php') || window.location.pathname === '/' || window.location.pathname === '/index.php';

  if (!isHome) {
    // Redirige vers la home en stockant l'ancre temporairement
    sessionStorage.setItem('scrollTo', sectionId);
    window.location.href = 'index.php';
  } else {
    // On est déjà sur la home → scroll direct sans modifier l’URL
    scrollToSection(sectionId);
  }
}

function scrollToSection(sectionId) {
  const element = document.getElementById(sectionId);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' });
    history.replaceState(null, '', ' '); // nettoie le hash de l’URL
  }
}

// Quand la home charge : scroll automatique si sessionStorage contient une ancre
window.addEventListener('DOMContentLoaded', () => {
  const sectionId = sessionStorage.getItem('scrollTo');
  if (sectionId) {
    scrollToSection(sectionId);
    sessionStorage.removeItem('scrollTo');
  }
});


document.addEventListener("DOMContentLoaded", function () {
  const track = document.getElementById("carouselTrack");
  if (track) {
    const cards = track.querySelectorAll(".review-card");

    let startX = 0;
    let endX = 0;
    let currentIndex = 0;

    function getCardFullWidth() {
      const style = getComputedStyle(cards[0]);
      const width = cards[0].offsetWidth;
      const marginRight = parseInt(style.marginRight) || 0;
      return width + marginRight;
    }

    function getVisibleCardsCount() {
      const wrapper = document.querySelector(".carousel-wrapper");
      const wrapperWidth = wrapper.offsetWidth;
      return Math.floor(wrapperWidth / getCardFullWidth());
    }

    function updateCarousel() {
      const offset = currentIndex * getCardFullWidth();
      track.style.transform = `translateX(-${offset}px)`;
    }

    // Gérer le swipe
    track.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
    });

    track.addEventListener("touchmove", (e) => {
      endX = e.touches[0].clientX;
    });

    track.addEventListener("touchend", () => {
      const deltaX = endX - startX;
      const visibleCards = getVisibleCardsCount();

      if (Math.abs(deltaX) > 50) {
        if (deltaX < 0 && currentIndex < cards.length - visibleCards) {
          currentIndex++;
        } else if (deltaX > 0 && currentIndex > 0) {
          currentIndex--;
        }
        updateCarousel();
      }

      startX = 0;
      endX = 0;
    });

    window.addEventListener("resize", updateCarousel);
  }  
});

const floatingContainer = document.getElementById('floatingImageContainer');
const floatingImage = document.getElementById('floatingImage');
const triggers = document.querySelectorAll('.lightbox-trigger');

if (floatingContainer && floatingImage) {
  triggers.forEach(img => {
    img.style.cursor = 'pointer';
    img.addEventListener('click', () => {
      floatingImage.src = img.src;
      floatingImage.alt = img.alt;
      floatingContainer.classList.add('active');
    });
  });

  floatingContainer.addEventListener('click', () => {
    floatingContainer.classList.remove('active');
    floatingImage.src = '';
    floatingImage.alt = '';
  });

  floatingImage.addEventListener('click', e => e.stopPropagation());
}
