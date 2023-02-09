import { addSelfDestructingEventListener } from "./utils.js";

// Setup
export default function menu() {
  const mediaQueryMobile = window.matchMedia("(max-width: 992px)");
  const mediaQueryDesktop = window.matchMedia("(min-width: 992px)");
  const desktopMenuNavigation =
    document.querySelector(".desktop-menu") ||
    document.querySelector(".desktop-menu--home");
  let lastScrollTop = 0;

  function collapseSection(element) {
    // get the height of the element's inner content, regardless of its actual size
    const sectionHeight = element.scrollHeight;

    // temporarily disable all css transitions
    const elementTransition = element.style.transition;
    element.style.transition = "";

    // on the next frame (as soon as the previous style change has taken effect),
    // explicitly set the element's height to its current pixel height, so we
    // aren't transitioning out of 'auto'
    requestAnimationFrame(function () {
      element.style.height = sectionHeight + "px";
      element.style.transition = elementTransition;

      // on the next frame (as soon as the previous style change has taken effect),
      // have the element transition to height: 0
      requestAnimationFrame(function () {
        element.style.height = 0 + "px";
      });
    });

    // mark the section as "currently collapsed"
    element.setAttribute("data-collapsed", "true");
  }

  function expandSection(element) {
    // get the height of the element's inner content, regardless of its actual size
    const sectionHeight = element.scrollHeight;

    // have the element transition to the height of its inner content
    element.style.height = sectionHeight + "px";

    // when the next css transition finishes (which should be the one we just triggered)
    const removeHeight = function (e) {
      element.style.height = null;
    };

    addSelfDestructingEventListener(element, "transitionend", removeHeight);

    // mark the section as "currently not collapsed"
    element.setAttribute("data-collapsed", "false");
  }

  function expandSubMenu(e) {
    const expandSubMenuTrigger = e.target;
    expandSubMenuTrigger.classList.toggle("show-submenu__toggled");
    const submenu = expandSubMenuTrigger.nextElementSibling;

    const isCollapsed = submenu.getAttribute("data-collapsed") === "true";

    if (isCollapsed) {
      expandSection(submenu);
      submenu.setAttribute("data-collapsed", "false");
      submenu.classList.add("sub-menu--expanded");
    } else {
      collapseSection(submenu);
    }
  }

  const mobileMenu = () => {
    const mobileMenuToggle = document.querySelector("#mobileMenuToggle");

    if (!mobileMenuToggle) return;

    mobileMenuToggle.addEventListener("click", function (e) {
      e.preventDefault();
      mobileMenuWrapper.classList.toggle("toggled");
    });

    const nav = document.querySelector(".mobile-menu");

    if (!nav) return;

    console.log("mobilemeny rdy");

    const linksWithChildren = nav.querySelectorAll(".menu-item-has-children");

    linksWithChildren.forEach((link) => {
      if (link.querySelector(".sub-menu")) {
        const submenu = link.querySelector(".sub-menu");

        submenu.setAttribute("data-collapsed", "true");
      }
    });

    nav.addEventListener("click", function (e) {
      if (e.target.classList.contains("show-submenu")) {
        expandSubMenu(e);
      }
    });
  };

  function handleMobileChange(e) {
    if (e.matches) {
      console.log("Media Query Mobile Matched!");
      mobileMenu();
    }
  }

  mediaQueryMobile.addListener(handleMobileChange);
  handleMobileChange(mediaQueryMobile);

  const desktopMenu = () => {
    const nav = document.querySelector(".desktop-menu--home");

    if (!nav) return;

    const linksWithChildren = nav.querySelectorAll(".menu-item-has-children");

    linksWithChildren.forEach((link) => {
      if (link.querySelector(".sub-menu")) {
        const submenu = link.querySelector(".sub-menu");

        submenu.setAttribute("data-collapsed", "true");
      }
    });

    nav.addEventListener("click", function (e) {
      if (e.target.classList.contains("show-submenu")) {
        expandSubMenu(e);
      }
    });
  };

  function handleDesktopChange(e) {
    // Check if the media query is true
    if (e.matches) {
      console.log("Media Query Desktop Matched!");
      desktopMenu();
    }

    window.addEventListener(
      "scroll",
      () => {
        let st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
        if (st > lastScrollTop) {
          desktopMenuNavigation.classList.add("hide");
        } else {
          desktopMenuNavigation.classList.remove("hide");
        }
        lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
      },
      false
    );
  }

  mediaQueryDesktop.addListener(handleDesktopChange);
  handleDesktopChange(mediaQueryDesktop);
}
