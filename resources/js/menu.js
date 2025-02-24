import { addSelfDestructingEventListener } from "./utils.js";
import luxy from "luxy.js";

// Setup
export default function menu() {
  const mediaQueryMobile = window.matchMedia("(max-width: 1280px)");
  const mediaQueryDesktop = window.matchMedia("(min-width: 1280px)");
  const desktopMenuHomeNavigation =
    document.querySelector(".desktop-menu") ||
    document.querySelector(".desktop-menu--home");
  let lastScrollTop = 0;

  function collapseSection(element) {
    // mark the section as "currently collapsed"
    element.setAttribute("data-collapsed", "true");
    element.classList.remove("sub-menu--expanded");

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
    element.classList.add("sub-menu--expanded");
  }

  function expandSubMenu(e) {
    const expandSubMenuTrigger = e.target;
    expandSubMenuTrigger.classList.toggle("show-submenu__toggled");
    const submenu = expandSubMenuTrigger.nextElementSibling;

    const isCollapsed = submenu.getAttribute("data-collapsed") === "true";

    if (isCollapsed) {
      expandSection(submenu);
    } else {
      collapseSection(submenu);
    }

    if (
      isCollapsed &&
      !e.target.matches(".show-submenu") &&
      !e.target.closest(".sub-menu")
    ) {
      collapseSection(submenu);
    }
  }

  const mobileMenu = () => {
    const mainContent = document.querySelector("#content");
    const mobileMenuToggle = document.querySelector("#mobileMenuToggle");
    let menuToggled = false;

    if (!mobileMenuToggle) return;

    document.addEventListener("click", function (e) {
      if (
        e.target.matches("#mobileMenuToggle") ||
        e.target.closest("#mobileMenuToggle")
      ) {
        mobileMenuToggle.classList.toggle("active");
        mobileMenuWrapper.classList.toggle("toggled");
        mainContent.classList.toggle("overlay--active");
        menuToggled = !menuToggled;
        return;
      }

      if (menuToggled && !e.target.closest("#mobileMenuWrapper")) {
        mobileMenuToggle.classList.toggle("active");
        mobileMenuWrapper.classList.toggle("toggled");
        mainContent.classList.toggle("overlay--active");
        menuToggled = !menuToggled;
        return;
      }
    });

    const nav = document.querySelector(".mobile-menu");

    if (!nav) return;

    const linksWithChildren = nav.querySelectorAll(".menu-item-has-children");

    linksWithChildren.forEach((link) => {
      if (link.querySelector(".sub-menu")) {
        const submenu = link.querySelector(".sub-menu");
        submenu.setAttribute("data-collapsed", "true");
      }
    });

    document.addEventListener("click", function (e) {
      if (e.target.classList.contains("show-submenu")) {
        expandSubMenu(e);
      }
    });
  };

  function handleMobileChange(e) {
    if (e.matches) {
      mobileMenu();
      luxy.wrapperSpeed = 0;
    }
  }

  mediaQueryMobile.addListener(handleMobileChange);
  handleMobileChange(mediaQueryMobile);

  const desktopMenuHome = () => {
    const nav = document.querySelector(".desktop-menu--home");
    const allSubmenus = document.querySelectorAll(".sub-menu");
    let isMenuCollapsed = false;

    if (!nav) return;

    const linksWithChildren = nav.querySelectorAll(".menu-item-has-children");

    linksWithChildren.forEach((link) => {
      if (link.querySelector(".sub-menu")) {
        const submenu = link.querySelector(".sub-menu");
        submenu.setAttribute("data-collapsed", "true");
      }
    });

    document.addEventListener("click", function (e) {
      if (e.target.classList.contains("show-submenu")) {
        const expandSubMenuTrigger = e.target;
        const submenu = expandSubMenuTrigger.nextElementSibling;
        const isCollapsed = submenu.getAttribute("data-collapsed") === "true";
        expandSubMenuTrigger.classList.toggle("show-submenu__toggled");

        if (isCollapsed) {
          expandSection(submenu);
          isMenuCollapsed = true;
        } else {
          collapseSection(submenu);
          isMenuCollapsed = false;
        }
      }

      if (
        isMenuCollapsed &&
        !e.target.matches(".show-submenu") &&
        !e.target.closest(".sub-menu")
      ) {
        allSubmenus.forEach((submenu) => {
          collapseSection(submenu);
        });

        nav.querySelectorAll(".show-submenu").forEach((el) => {
          el.classList.remove("show-submenu__toggled");
        });

        isMenuCollapsed = false;
      }
    });
  };

  const desktopMenuGlobal = () => {
    const nav = document.querySelector(".desktop-menu--global");
    const allSubmenus = document.querySelectorAll(".sub-menu");
    let isMenuCollapsed = false;

    if (!nav) return;

    const linksWithChildren = nav.querySelectorAll(".menu-item-has-children");

    /* set data attr here because wp doesnt allow to do it on an initial render */
    linksWithChildren.forEach((link) => {
      if (link.querySelector(".sub-menu")) {
        const submenu = link.querySelector(".sub-menu");
        submenu.setAttribute("data-collapsed", "true");
      }
    });

    document.addEventListener("click", function (e) {
      if (e.target.classList.contains("show-submenu")) {
        const expandSubMenuTrigger = e.target;
        const submenu = expandSubMenuTrigger.nextElementSibling;
        const isCollapsed = submenu.getAttribute("data-collapsed") === "true";
        expandSubMenuTrigger.classList.toggle("show-submenu__toggled");

        if (isCollapsed) {
          expandSection(submenu);
          isMenuCollapsed = true;
        } else {
          collapseSection(submenu);
          isMenuCollapsed = false;
        }
      }

      if (
        isMenuCollapsed &&
        !e.target.matches(".show-submenu") &&
        !e.target.closest(".sub-menu")
      ) {
        allSubmenus.forEach((submenu) => {
          collapseSection(submenu);
        });

        nav.querySelectorAll(".show-submenu").forEach((el) => {
          el.classList.remove("show-submenu__toggled");
        });

        isMenuCollapsed = false;
      }
    });
  };

  function handleDesktopChange(e) {
    // Check if the media query is true
    if (e.matches) {
      desktopMenuHome();
      desktopMenuGlobal();
    }

    window.addEventListener(
      "scroll",
      () => {
        let st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
        if (st > lastScrollTop) {
          desktopMenuHomeNavigation.classList.add("scrolled");
        } else {
          desktopMenuHomeNavigation.classList.remove("scrolled");
        }
        lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
      },
      false
    );
  }

  mediaQueryDesktop.addListener(handleDesktopChange);
  handleDesktopChange(mediaQueryDesktop);
}
