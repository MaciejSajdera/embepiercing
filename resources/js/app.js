import menu from "./collapseMenu.js";
import ProgressScrollBar from "./scrollProgress.js";
import Modal from "./modal.js";
import { handleCookiesAccept } from "./cookies.js";

// Navigation toggle
window.addEventListener("load", function () {
  /* show page content with transition */

  const pageContent = document.querySelector("#page");

  pageContent.classList.remove("opacity-0");
  pageContent.classList.add("opacity-100");

  /* menu */

  menu();

  /* progress bar */

  const progress = new ProgressScrollBar(
    document.querySelector("#progressBar")
  );
  progress.init();

  /* general cookies */

  const modalElementCookiesGeneral = document.querySelector("#modalEl");

  const modalOptionsCookiesGeneral = {
    placement: "bottom-right",
    backdrop: "dynamic",
    backdropClasses:
      "bg-gray-900 bg-opacity-50 backdrop-blur-lg fixed inset-0 z-40",
    closable: false,
    onHide: () => {
      console.log("modal is hidden");
    },
    onShow: () => {
      console.log("modal is shown");
    },
    onToggle: () => {
      console.log("modal has been toggled");
    },
  };

  const modalCookiesGeneral = new Modal(
    modalElementCookiesGeneral,
    modalOptionsCookiesGeneral
  );

  /* cookies for specific purposes */

  const modalElementAdultery = document.querySelector("#modalElAdultery");

  const modalOptionsAdultery = {
    placement: "center-center",
    backdrop: "dynamic",
    backdropClasses:
      "bg-gray-900 bg-opacity-50 backdrop-blur-3xl fixed inset-0 z-40",
    closable: false,
    onHide: () => {
      console.log("modal is hidden");
    },
    onShow: () => {
      console.log("modal is shown");
    },
    onToggle: () => {
      console.log("modal has been toggled");
    },
  };

  function handleCookiesAdultery() {
    if (modalElementAdultery) {
      const modalCookiesAdultery = new Modal(
        modalElementAdultery,
        modalOptionsAdultery
      );

      handleCookiesAccept(
        modalElementAdultery,
        modalCookiesAdultery,
        "adult_user_cookie_consent"
      );
    }
    return;
  }

  /* handle general cookies and THEN other optional cookie handlers */
  handleCookiesAccept(
    modalElementCookiesGeneral,
    modalCookiesGeneral,
    "user_cookie_consent",
    handleCookiesAdultery,
    handleCookiesAdultery
  );
});
