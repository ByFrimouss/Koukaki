/*********** ANIMATION DES SECTION ***************/

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section");

  sections.forEach((section, index) => {
    if (section.classList.contains("banner")) {
      // Animation de montée pour la section .banner
      section.classList.add("section-visible-up");
    } else {
      // Animation de descente pour les autres sections
      setTimeout(() => {
        section.classList.add("section-visible-down");
      }, index * 0); // Délai de 0ms entre chaque section
    }
  });
});

/************** ANIMATION DES TITRES *****************/

document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll(".section-titre");

  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom > 0;
  }

  function checkVisibility() {
    titles.forEach((title) => {
      if (isInViewport(title)) {
        title.classList.add("titre-visible");
      }
    });
  }

  window.addEventListener("scroll", checkVisibility);
  window.addEventListener("load", checkVisibility); // Vérifier au chargement initial
});

/***************** CAROUSEL ********************/

document.addEventListener("DOMContentLoaded", () => {
  const swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    slidesPerView: 4,
    centeredSlides: true,
    spaceBetween: 30,
    coverflowEffect: {
      depth: 100,
      modifier: 1,
      stretch: 0,
      slideShadows: false,
    },
  });
});

/**************** ANIMATION DES NUAGES ****************/

document.addEventListener("DOMContentLoaded", () => {
  const bigCloud = document.querySelector(".place--big_cloud");
  const littleCloud = document.querySelector(".place--little_cloud");
  const placeSection = document.querySelector("#place");

  // Fonction qui ajuste la position des nuages en fonction du scroll dans la section "Le Lieu"
  function moveClouds() {
    const sectionTop = placeSection.offsetTop;
    const sectionHeight = placeSection.offsetHeight;
    const scrollPosition = window.scrollY;

    // Facteur de ralentissement
    const isMobile = window.innerWidth <= 768; // Détecte les écrans de largeur ≤ 768px
    const slowdownFactor = isMobile ? 0.5 : 1; // Réduction du déplacement sur mobile

    if (
      scrollPosition >= sectionTop &&
      scrollPosition <= sectionTop + sectionHeight
    ) {
      const scrollInSection = scrollPosition - sectionTop;
      const sectionScrollRatio = scrollInSection / sectionHeight;

      // Appliquer le facteur de ralentissement
      const moveBigCloud = Math.min(
        sectionScrollRatio * 380 * slowdownFactor,
        380
      );
      const moveLittleCloud = Math.min(
        sectionScrollRatio * 460 * slowdownFactor,
        460
      );

      bigCloud.style.transform = `translateX(-${moveBigCloud}px)`;
      littleCloud.style.transform = `translateX(-${moveLittleCloud}px)`;
    }
  }

  // Attacher la fonction au scroll de la fenêtre
  window.addEventListener("scroll", moveClouds);
});

/*************** ANIMATION DU MENU BURGER *************************/

// JavaScript pour gérer l'ouverture et la fermeture du menu
document.addEventListener("DOMContentLoaded", () => {
  const burgerMenu = document.getElementById("burger-menu");
  const closeMenu = document.getElementById("close-menu");
  const menuOverlay = document.getElementById("menu-overlay");

  burgerMenu.addEventListener("click", () => {
    menuOverlay.classList.add("open");
  });

  closeMenu.addEventListener("click", () => {
    menuOverlay.classList.remove("open");
  });
});
