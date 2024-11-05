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
  // Sélectionner les nuages et la section "Le Lieu"
  const bigCloud = document.querySelector(".place--big_cloud");
  const littleCloud = document.querySelector(".place--little_cloud");
  const placeSection = document.querySelector("#place");

  // Fonction qui ajuste la position des nuages en fonction du scroll dans la section "Le Lieu"
  function moveClouds() {
    // Obtenir la position de la section "Le Lieu" par rapport au haut de la page
    const sectionTop = placeSection.offsetTop;
    const sectionHeight = placeSection.offsetHeight;
    const scrollPosition = window.scrollY;

    // Vérifier si le scroll est dans la section "Le Lieu"
    if (
      scrollPosition >= sectionTop &&
      scrollPosition <= sectionTop + sectionHeight
    ) {
      // Calculer le pourcentage de scroll dans la section "Le Lieu"
      const scrollInSection = scrollPosition - sectionTop;
      const sectionScrollRatio = scrollInSection / sectionHeight;

      // Ajuster les déplacements pour que les nuages atteignent le bord gauche (limite plus élevée)
      const moveBigCloud = Math.min(sectionScrollRatio * 380, 380); // Ajusté à 300px maximum pour un mouvement plus lent
      const moveLittleCloud = Math.min(sectionScrollRatio * 460, 460); // Ajusté à 500px maximum pour un déplacement plus visible

      // Appliquer la transformation pour déplacer les nuages
      bigCloud.style.transform = `translateX(-${moveBigCloud}px)`;
      littleCloud.style.transform = `translateX(-${moveLittleCloud}px)`;
    }
  }

  // Attacher la fonction au scroll de la fenêtre
  window.addEventListener("scroll", moveClouds);
});

/*************** ANIMATION DU MENU BURGER *************************/

document.addEventListener("DOMContentLoaded", () => {
  const burgerMenu = document.getElementById("burger-menu");
  const menuOverlay = document.getElementById("menu-overlay");
  const closeMenu = document.getElementById("close-menu");

  // Fonction pour ouvrir/fermer le menu
  const toggleMenu = () => {
    burgerMenu.classList.toggle("open");
    menuOverlay.classList.toggle("open");
  };

  // Écouteur pour le bouton burger
  burgerMenu.addEventListener("click", toggleMenu);

  // Écouteur pour le bouton de fermeture
  closeMenu.addEventListener("click", toggleMenu);
});
