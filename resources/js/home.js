import createObserverHeroImage, {
  createObserverZoomInOutImgs,
} from "./observers.js";

// Navigation toggle
window.addEventListener("load", function () {
  createObserverHeroImage();
  createObserverZoomInOutImgs();
});
