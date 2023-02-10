
import menu from "./collapseMenu.js";

// Navigation toggle
window.addEventListener("load", function () {
  menu();

  const cookiesNotification = () => {
    const cookiesInfo = document.querySelector(".cookie-law-notification");
    const cookiesAcceptButton = document.querySelector("#cookie-law-button");

    if (localStorage.getItem("cookiesAreAccepted")) {
      return;
    } else {
      cookiesInfo.classList.add("cookies-notification-on");
      cookiesAcceptButton &&
        cookiesAcceptButton.addEventListener("click", () => {
          localStorage.setItem("cookiesAreAccepted", "1");
          cookiesInfo.classList.add("cookies-notification-off");
        });
      return;
    }

    //temp
    // cookiesInfo.classList.add("cookies-notification-on");
  };
});
