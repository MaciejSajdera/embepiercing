import Accordion from "./accordion";

// Navigation toggle
window.addEventListener("load", function () {
  new Accordion(document.querySelector("#accordion-color")).init();
});
