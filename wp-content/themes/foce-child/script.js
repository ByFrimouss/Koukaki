//ANIMATION AU SCROLL

// document.addEventListener("DOMContentLoaded", () => {
//   const sections = document.querySelectorAll("section");

//   window.addEventListener("scroll", () => {
//     sections.forEach((section) => {
//       const sectionTop = section.getBoundingClientRect().top;
//       if (sectionTop < window.innerHeight - 100) {
//         section.classList.add("section-visible");
//       }
//     });
//   });
// });


//ANIMATION AU CHARGEMENT DE LA PAGE

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".section-fade-in");

  sections.forEach((section, index) => {
      // Utiliser setTimeout pour appliquer la classe avec un délai
      setTimeout(() => {
          section.classList.add("section-visible");
      }, index * 100); // Délai de 100ms entre chaque section
  });

  console.log("Le script est chargé correctement !");
});

/* PERMET D'AVOIR UN EFFET SCROLL LOGO */

document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll('.animation-titre');

  // Fonction qui vérifie si l'élément est visible dans le viewport (partiellement visible)
  function affichageViewport(element) {
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;

    // Vérifie si l'élément est partiellement visible
    return (
      rect.top < windowHeight && rect.bottom > 0
    );
  }

  // Fonction qui vérifie chaque titre lors du scroll
  function titreScroll() {
    titles.forEach(title => {
      if (affichageViewport(title)) {
        title.classList.add('visible'); // Ajouter la classe quand visible
      } else {
        title.classList.remove('visible'); // Optionnel : retirer la classe quand invisible
      }
    });
  }

  // Lancer la vérification au chargement initial et sur chaque défilement
  window.addEventListener('scroll', titreScroll);

  // Vérifier immédiatement après le chargement pour les éléments déjà visibles
  titreScroll();

  console.log("Le script scroll vraiment !");
});


/* fin */

/** ANIMATION TITRES  **/
document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll(".section-titre");

  // Vérifier si un élément est visible dans le viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top < window.innerHeight && rect.bottom > 0
    );
  }

  // Vérifier la visibilité de chaque titre et appliquer l'animation
  function checkVisibility() {
    titles.forEach(title => {
      if (isInViewport(title)) {
        title.classList.add("titre-visible");
      }
    });
  }

  window.addEventListener('scroll', checkVisibility);
  window.addEventListener('load', checkVisibility); // Vérifier au chargement initial
});