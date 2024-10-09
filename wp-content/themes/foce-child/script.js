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
  const sections = document.querySelectorAll("section");

  sections.forEach((section, index) => {
      // Utiliser setTimeout pour appliquer la classe avec un délai
      setTimeout(() => {
          section.classList.add("section-visible");
      }, index * 300); // Délai de 300ms entre chaque section
  });

  console.log("Le script est chargé correctement !");
});
