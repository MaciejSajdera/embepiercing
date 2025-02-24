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

export function createObserverZoomInOutImgs() {
  const heroScreenMarkers = document.querySelectorAll(".zoom-in-out");

  let options = {
    root: null,
    rootMargin: "100px",
    // threshold: 100,
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

export const isElementInViewport = (el) => {
  const scroll = window.scrollY || window.pageYOffset;
  const boundsTop = el.getBoundingClientRect().top + scroll;

  const viewport = {
    top: scroll,
    bottom: scroll + window.innerHeight,
  };

  const bounds = {
    top: boundsTop,
    bottom: boundsTop + el.clientHeight,
  };

  return (
    (bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom) ||
    (bounds.top <= viewport.bottom && bounds.top >= viewport.top)
  );
};

export class isElementInterSecting {
  constructor(element, action) {
    this.element = element;
    this.action = action;

    if ("IntersectionObserver" in window) {
      // IntersectionObserver Supported
      let config = {
        root: null,
        rootMargin: "0px",
        threshold: 0.5,
      };

      let observer = new IntersectionObserver(onChange, config);

      observer.observe(element);

      function onChange(changes, observer) {
        changes.forEach((change) => {
          if (change.intersectionRatio > 0) {
            // Stop watching and load the image
            action(change.target);
            observer.unobserve(change.target);
          }
        });
      }
    } else {
      // IntersectionObserver NOT Supported
      action(element);
    }
  }
}

// export function onMouseOverListener() {
//   document.addEventListener("mouseover", function (e) {
//     if (e.target.classList.contains("zoom-in-out")) {
//       console.log(e.target);
//     }
//   });
// }
