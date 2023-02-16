export default class Accordion {
  constructor(element) {
    this.element = element;
  }

  init() {
    const svgActiveTwClasses = `w-6 h-6 shrink-0 transform rotate-180`;

    this.element.addEventListener("click", (e) => {
      if (e.target.nodeName === "BUTTON") {
        const trigger = e.target;

        trigger.classList.toggle("accordion__button--active");
        const tabBodyId = trigger.dataset.accordionTarget;
        const tabBody = document.querySelector(tabBodyId);
        tabBody.classList.toggle("hidden");
        trigger.querySelector("svg").setAttribute("class", svgActiveTwClasses);
      }
    });
  }
}
