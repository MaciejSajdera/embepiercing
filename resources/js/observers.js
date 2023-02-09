export default function createObserverHeroImage() {
  const heroScreenMarker = document.querySelector("#heroScreenMarker");
  const heroElement = document.querySelector("#heroImageHolder");

  let options = {
    root: null,
    rootMargin: "0px",
    // threshold: buildThresholdList()
  };

  const fadeBgImage = (entries, observer) => {
    entries.forEach((entry) => {
      console.log(entry);

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

export function createObserverZoomInOutImgs() {
  const heroScreenMarkers = document.querySelectorAll(".zoom-in-out");
  const heroElement = document.querySelector(".zoom-in-out");

  let options = {
    root: null,
    rootMargin: "100px",
    // threshold: 100,
  };

  const zoomInImg = (entries, observer) => {
    entries.forEach((entry) => {
      console.log(entry.target);

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
