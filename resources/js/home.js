import createObserverHeroImage, {
  createObserverZoomInOutImgs,
} from "./observers.js";

function revealTitle() {
  const titlesToBeRevealed = document.querySelectorAll(".title-reveal");

  console.log(titlesToBeRevealed);

  if (!titlesToBeRevealed) return;

  titlesToBeRevealed.forEach((title, i) => {
    title.classList.add("title-reveal--revealed");

    if (i > 0) {
      title.style.transitionDelay = `${i * 0.15}s`;
    }
  });
}

// Navigation toggle
window.addEventListener("load", function () {
  createObserverHeroImage();
  createObserverZoomInOutImgs();
  revealTitle();
});
