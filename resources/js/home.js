import createObserverHeroImage, {
  createObserverZoomInOutImgs,
} from "./observers.js";

function revealTitle() {
  const titlesToBeRevealed = document.querySelectorAll(".title-reveal");

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

  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("reveal-more")) {
      e.preventDefault();
      const trimmedNode = e.target.closest(
        ".entry-content--revealFullOnMobile"
      );

      const revealButton = trimmedNode.querySelector(".reveal-more");

      trimmedNode.classList.toggle("entry-content--revealed");

      if (revealButton.dataset.show === "true") {
        revealButton.dataset.show = "false";
        revealButton.innerHTML = "Czytaj więcej";
      } else {
        revealButton.dataset.show = "true";
        revealButton.innerHTML = "Zwiń";
      }
    }
  });
});
