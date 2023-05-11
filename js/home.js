// resources/js/observers.js
function createObserverHeroImage() {
  const heroScreenMarker = document.querySelector("#heroScreenMarker");
  const heroElement = document.querySelector("#heroImageHolder");
  let options = {
    root: null,
    rootMargin: "0px"
  };
  const fadeBgImage = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting || isElementInViewport(heroElement)) {
        heroElement.classList?.add("fadeIn");
        heroElement.classList?.remove("fadeOut");
      }
      if (!entry.isIntersecting) {
        heroElement.classList?.remove("fadeIn");
        heroElement.classList?.add("fadeOut");
      }
    });
  };
  if (heroScreenMarker) {
    const io = new IntersectionObserver(fadeBgImage, options);
    io.observe(heroScreenMarker);
  }
}
function createObserverZoomInOutImgs() {
  const heroScreenMarkers = document.querySelectorAll(".zoom-in-out");
  let options = {
    root: null,
    rootMargin: "100px"
  };
  const zoomInImg = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("zoomOut");
        entry.target.classList.remove("zoomIn");
      }
      if (!entry.isIntersecting) {
        entry.target.classList.remove("zoomOut");
        entry.target.classList.add("zoomIn");
      }
    });
  };
  if (heroScreenMarkers) {
    heroScreenMarkers.forEach((marker) => {
      const io = new IntersectionObserver(zoomInImg, options);
      io.observe(marker);
    });
  }
}
var isElementInViewport = (el) => {
  const scroll = window.scrollY || window.pageYOffset;
  const boundsTop = el.getBoundingClientRect().top + scroll;
  const viewport = {
    top: scroll,
    bottom: scroll + window.innerHeight
  };
  const bounds = {
    top: boundsTop,
    bottom: boundsTop + el.clientHeight
  };
  return bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom || bounds.top <= viewport.bottom && bounds.top >= viewport.top;
};

// resources/js/home.js
function revealTitle() {
  const titlesToBeRevealed = document.querySelectorAll(".title-reveal");
  if (!titlesToBeRevealed)
    return;
  titlesToBeRevealed.forEach((title, i) => {
    title.classList.add("title-reveal--revealed");
    if (i > 0) {
      title.style.transitionDelay = `${i * 0.15}s`;
    }
  });
}
window.addEventListener("DOMContentLoaded", function() {
  createObserverHeroImage();
  createObserverZoomInOutImgs();
  revealTitle();
  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("reveal-more")) {
      e.preventDefault();
      const trimmedNode = e.target.closest(".entry-content--revealFullOnMobile");
      const revealButton = trimmedNode.querySelector(".reveal-more");
      trimmedNode.classList.toggle("entry-content--revealed");
      if (revealButton.dataset.show === "true") {
        revealButton.dataset.show = "false";
        revealButton.innerHTML = "Czytaj wi\u0119cej";
      } else {
        revealButton.dataset.show = "true";
        revealButton.innerHTML = "Zwi\u0144";
      }
    }
  });
});
