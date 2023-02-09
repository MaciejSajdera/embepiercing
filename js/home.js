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
      if (entry.isIntersecting) {
        heroElement.classList.add("fadeIn");
        heroElement.classList.remove("fadeOut");
      }
      if (!entry.isIntersecting) {
        heroElement.classList.remove("fadeIn");
        heroElement.classList.add("fadeOut");
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

// resources/js/home.js
window.addEventListener("load", function() {
  createObserverHeroImage();
  createObserverZoomInOutImgs();
});
