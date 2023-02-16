export default class ProgressScrollBar {
  constructor(element) {
    this.element = element;
  }

  init() {
    const progressIndicator = this.element;
    const totalHeight = document.body.scrollHeight - window.innerHeight;

    window.onscroll = function () {
      const progressIndicatorHeight = (window.pageYOffset / totalHeight) * 100;
      progressIndicator.style.height = progressIndicatorHeight + "%";
    };
  }
}
