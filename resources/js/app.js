import menu from "./menu.js";
import ProgressScrollBar from "./scroll.js";
import Modal from "./modal.js";
import { handleCookiesAccept } from "./cookies.js";
// import { onCLS, onFID, onLCP } from "web-vitals"
import { scrollAnimations } from "./scroll.js";

// onCLS(console.log);
// onFID(console.log);
// onLCP(console.log);

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

  /* scroll animations */

  scrollAnimations();

  /* general cookies */

  const modalElementCookiesGeneral = document.querySelector(
    "#modalGeneralCookies"
  );

  const modalOptionsCookiesGeneral = {
    placement: "bottom-left",
    backdrop: "dynamic",
    backdropClasses: "bg-gray-900 bg-opacity-50 fixed inset-0 z-40",
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

  function handleGeneralCookies() {
    handleCookiesAccept(
      modalElementCookiesGeneral,
      modalCookiesGeneral,
      "user_cookie_consent"
    );
  }

  function handleCookiesAdultery() {
    const modalCookiesAdultery = new Modal(
      modalElementAdultery,
      modalOptionsAdultery
    );

    handleCookiesAccept(
      modalElementAdultery,
      modalCookiesAdultery,
      "adult_user_cookie_consent",
      handleGeneralCookies
    );
  }

  if (!modalElementAdultery) {
    handleGeneralCookies();
  }

  if (modalElementAdultery) {
    handleCookiesAdultery();
  }
});
