import { isElementInViewport } from "./observers.js";

export default class RevealChildrenOf {
  constructor(elementsParent, delayTime) {
    this.elementsParent = elementsParent;
    this.delayTime = delayTime;

    if (!elementsParent) {
      return;
    }

    this.hide();

    isElementInViewport(this.elementsParent)
      ? this.reveal()
      : document.addEventListener("scroll", () => {
          this.reveal();
        });
  }

  hide() {
    this.elementsParent.children
      ? [...this.elementsParent.children].map((element, i) => {
          element.style.opacity = "0";
        })
      : "";
  }

  reveal() {
    isElementInViewport(this.elementsParent) && this.elementsParent.children
      ? [...this.elementsParent.children].map((element, i) => {
          element.style.transitionDelay = `${i / this.delayTime}s`;
          element.style.opacity = "1";
        })
      : "";
  }
}
