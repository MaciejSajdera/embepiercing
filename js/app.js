var __create = Object.create;
var __defProp = Object.defineProperty;
var __getOwnPropDesc = Object.getOwnPropertyDescriptor;
var __getOwnPropNames = Object.getOwnPropertyNames;
var __getProtoOf = Object.getPrototypeOf;
var __hasOwnProp = Object.prototype.hasOwnProperty;
var __markAsModule = (target) => __defProp(target, "__esModule", { value: true });
var __commonJS = (cb, mod) => function __require() {
  return mod || (0, cb[Object.keys(cb)[0]])((mod = { exports: {} }).exports, mod), mod.exports;
};
var __reExport = (target, module, desc) => {
  if (module && typeof module === "object" || typeof module === "function") {
    for (let key of __getOwnPropNames(module))
      if (!__hasOwnProp.call(target, key) && key !== "default")
        __defProp(target, key, { get: () => module[key], enumerable: !(desc = __getOwnPropDesc(module, key)) || desc.enumerable });
  }
  return target;
};
var __toModule = (module) => {
  return __reExport(__markAsModule(__defProp(module != null ? __create(__getProtoOf(module)) : {}, "default", module && module.__esModule && "default" in module ? { get: () => module.default, enumerable: true } : { value: module, enumerable: true })), module);
};

// node_modules/luxy.js/dist/js/luxy.min.js
var require_luxy_min = __commonJS({
  "node_modules/luxy.js/dist/js/luxy.min.js"(exports, module) {
    !function(t, e) {
      "use strict";
      typeof define == "function" && define.amd ? define([], e) : typeof exports == "object" ? module.exports = e() : t.luxy = e();
    }(exports, function() {
      "use strict";
      var t = { wrapper: "#luxy", targets: ".luxy-el", wrapperSpeed: 0.08, targetSpeed: 0.02, targetPercentage: 0.1 }, e = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
      window.requestAnimationFrame = e;
      var i = window.cancelAnimationFrame || window.mozCancelAnimationFrame, s = function() {
        for (var t2 = {}, e2 = 0, i2 = arguments.length; e2 < i2; e2++) {
          var s2 = arguments[e2];
          !function(e3) {
            for (var i3 in e3)
              e3.hasOwnProperty(i3) && (t2[i3] = e3[i3]);
          }(s2);
        }
        return t2;
      }, r = function() {
        this.Targets = [], this.TargetsLength = 0, this.wrapper = "", this.windowHeight = 0, this.wapperOffset = 0;
      };
      return r.prototype = { isAnimate: false, isResize: false, scrollId: "", resizeId: "", init: function(e2) {
        if (this.settings = s(t, e2 || {}), this.wrapper = document.querySelector(this.settings.wrapper), this.wrapper === "undefined")
          return false;
        this.targets = document.querySelectorAll(this.settings.targets), document.body.style.height = this.wrapper.clientHeight + "px", this.windowHeight = window.clientHeight, this.attachEvent(), this.apply(this.targets, this.wrapper), this.animate(), this.resize();
      }, apply: function(t2, e2) {
        this.wrapperInit(), this.targetsLength = t2.length;
        for (var i2 = 0; i2 < this.targetsLength; i2++) {
          var s2 = { offset: t2[i2].getAttribute("data-offset"), speedX: t2[i2].getAttribute("data-speed-x"), speedY: t2[i2].getAttribute("data-speed-Y"), percentage: t2[i2].getAttribute("data-percentage"), horizontal: t2[i2].getAttribute("data-horizontal") };
          this.targetsInit(t2[i2], s2);
        }
      }, wrapperInit: function() {
        this.wrapper.style.width = "100%", this.wrapper.style.position = "fixed";
      }, targetsInit: function(t2, e2) {
        this.Targets.push({ elm: t2, offset: e2.offset ? e2.offset : 0, horizontal: e2.horizontal ? e2.horizontal : 0, top: 0, left: 0, speedX: e2.speedX ? e2.speedX : 1, speedY: e2.speedY ? e2.speedY : 1, percentage: e2.percentage ? e2.percentage : 0 });
      }, scroll: function() {
        document.documentElement.scrollTop || document.body.scrollTop;
        this.scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        this.scrollTop, this.windowHeight;
        this.wrapperUpdate(this.scrollTop);
        for (var t2 = 0; t2 < this.Targets.length; t2++)
          this.targetsUpdate(this.Targets[t2]);
      }, animate: function() {
        this.scroll(), this.scrollId = e(this.animate.bind(this));
      }, wrapperUpdate: function() {
        this.wapperOffset += (this.scrollTop - this.wapperOffset) * this.settings.wrapperSpeed, this.wrapper.style.transform = "translate3d(0," + Math.round(100 * -this.wapperOffset) / 100 + "px ,0)";
      }, targetsUpdate: function(t2) {
        t2.top += (this.scrollTop * Number(this.settings.targetSpeed) * Number(t2.speedY) - t2.top) * this.settings.targetPercentage, t2.left += (this.scrollTop * Number(this.settings.targetSpeed) * Number(t2.speedX) - t2.left) * this.settings.targetPercentage;
        var e2 = parseInt(t2.percentage) - t2.top - parseInt(t2.offset), i2 = Math.round(-100 * e2) / 100, s2 = 0;
        if (t2.horizontal) {
          var r2 = parseInt(t2.percentage) - t2.left - parseInt(t2.offset);
          s2 = Math.round(-100 * r2) / 100;
        }
        t2.elm.style.transform = "translate3d(" + s2 + "px ," + i2 + "px ,0)";
      }, resize: function() {
        var t2 = this;
        t2.windowHeight = window.innerHeight || document.documentElement.clientHeight || 0, parseInt(t2.wrapper.clientHeight) != parseInt(document.body.style.height) && (document.body.style.height = t2.wrapper.clientHeight + "px"), t2.resizeId = e(t2.resize.bind(t2));
      }, attachEvent: function() {
        var t2 = this;
        window.addEventListener("resize", function() {
          t2.isResize || (i(t2.resizeId), i(t2.scrollId), t2.isResize = true, setTimeout(function() {
            t2.isResize = false, t2.resizeId = e(t2.resize.bind(t2)), t2.scrollId = e(t2.animate.bind(t2));
          }, 200));
        });
      } }, new r();
    });
  }
});

// node_modules/ga-gtag/lib/index.js
var require_lib = __commonJS({
  "node_modules/ga-gtag/lib/index.js"(exports) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    exports.install = exports.gtag = exports["default"] = void 0;
    var install2 = function install3(trackingId) {
      var additionalConfigInfo = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : {};
      var scriptId = "ga-gtag";
      if (document.getElementById(scriptId))
        return;
      var _document = document, head = _document.head;
      var script = document.createElement("script");
      script.id = scriptId;
      script.async = true;
      script.src = "https://www.googletagmanager.com/gtag/js?id=".concat(trackingId);
      head.insertBefore(script, head.firstChild);
      window.dataLayer = window.dataLayer || [];
      gtag3("js", new Date());
      gtag3("config", trackingId, additionalConfigInfo);
    };
    exports.install = install2;
    var gtag3 = function gtag4() {
      window.dataLayer.push(arguments);
    };
    exports.gtag = gtag3;
    var _default = gtag3;
    exports["default"] = _default;
  }
});

// resources/js/utils.js
var addSelfDestructingEventListener = (element, eventType, callback) => {
  let handler = () => {
    callback();
    element.removeEventListener(eventType, handler);
  };
  element.addEventListener(eventType, handler);
};

// resources/js/menu.js
var import_luxy = __toModule(require_luxy_min());
function menu() {
  const mediaQueryMobile = window.matchMedia("(max-width: 1280px)");
  const mediaQueryDesktop = window.matchMedia("(min-width: 1280px)");
  const desktopMenuHomeNavigation = document.querySelector(".desktop-menu") || document.querySelector(".desktop-menu--home");
  let lastScrollTop = 0;
  function collapseSection(element) {
    element.setAttribute("data-collapsed", "true");
    element.classList.remove("sub-menu--expanded");
    const sectionHeight = element.scrollHeight;
    const elementTransition = element.style.transition;
    element.style.transition = "";
    requestAnimationFrame(function() {
      element.style.height = sectionHeight + "px";
      element.style.transition = elementTransition;
      requestAnimationFrame(function() {
        element.style.height = 0 + "px";
      });
    });
  }
  function expandSection(element) {
    const sectionHeight = element.scrollHeight;
    element.style.height = sectionHeight + "px";
    const removeHeight = function(e) {
      element.style.height = null;
    };
    addSelfDestructingEventListener(element, "transitionend", removeHeight);
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
    if (isCollapsed && !e.target.matches(".show-submenu") && !e.target.closest(".sub-menu")) {
      collapseSection(submenu);
    }
  }
  const mobileMenu = () => {
    const mainContent = document.querySelector("#content");
    const mobileMenuToggle = document.querySelector("#mobileMenuToggle");
    let menuToggled = false;
    if (!mobileMenuToggle)
      return;
    document.addEventListener("click", function(e) {
      if (e.target.matches("#mobileMenuToggle") || e.target.closest("#mobileMenuToggle")) {
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
      console.log(e.target);
    });
    const nav = document.querySelector(".mobile-menu");
    if (!nav)
      return;
    const linksWithChildren = nav.querySelectorAll(".menu-item-has-children");
    linksWithChildren.forEach((link) => {
      if (link.querySelector(".sub-menu")) {
        const submenu = link.querySelector(".sub-menu");
        submenu.setAttribute("data-collapsed", "true");
      }
    });
    document.addEventListener("click", function(e) {
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
  const desktopMenuHome = () => {
    const nav = document.querySelector(".desktop-menu--home");
    const allSubmenus = document.querySelectorAll(".sub-menu");
    let isMenuCollapsed = false;
    if (!nav)
      return;
    const linksWithChildren = nav.querySelectorAll(".menu-item-has-children");
    linksWithChildren.forEach((link) => {
      if (link.querySelector(".sub-menu")) {
        const submenu = link.querySelector(".sub-menu");
        submenu.setAttribute("data-collapsed", "true");
      }
    });
    document.addEventListener("click", function(e) {
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
      if (isMenuCollapsed && !e.target.matches(".show-submenu") && !e.target.closest(".sub-menu")) {
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
    if (!nav)
      return;
    const linksWithChildren = nav.querySelectorAll(".menu-item-has-children");
    linksWithChildren.forEach((link) => {
      if (link.querySelector(".sub-menu")) {
        const submenu = link.querySelector(".sub-menu");
        submenu.setAttribute("data-collapsed", "true");
      }
    });
    document.addEventListener("click", function(e) {
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
      if (isMenuCollapsed && !e.target.matches(".show-submenu") && !e.target.closest(".sub-menu")) {
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
    if (e.matches) {
      console.log("Media Query Desktop Matched!");
      desktopMenuHome();
      desktopMenuGlobal();
      import_luxy.default.init();
    }
    window.addEventListener("scroll", () => {
      let st = window.pageYOffset || document.documentElement.scrollTop;
      if (st > lastScrollTop) {
        desktopMenuHomeNavigation.classList.add("scrolled");
      } else {
        desktopMenuHomeNavigation.classList.remove("scrolled");
      }
      lastScrollTop = st <= 0 ? 0 : st;
    }, false);
  }
  mediaQueryDesktop.addListener(handleDesktopChange);
  handleDesktopChange(mediaQueryDesktop);
}

// resources/js/observers.js
var isElementInViewport = (el) => {
  const scroll = window.scrollY || window.pageYOffset;
  const boundsTop = el.getBoundingClientRect().top + scroll;
  const viewport = {
    top: scroll,
    bottom: scroll + window.innerHeight
  };
  const bounds = {
    top: boundsTop,
    bottom: boundsTop + el.clientHeight
  };
  return bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom || bounds.top <= viewport.bottom && bounds.top >= viewport.top;
};

// resources/js/revealNodes.js
var RevealChildrenOf = class {
  constructor(elementsParent, delayTime) {
    this.elementsParent = elementsParent;
    this.delayTime = delayTime;
    if (!elementsParent) {
      return;
    }
    this.hide();
    isElementInViewport(this.elementsParent) ? this.reveal() : document.addEventListener("scroll", () => {
      this.reveal();
    });
  }
  hide() {
    this.elementsParent.children ? [...this.elementsParent.children].map((element, i) => {
      element.style.opacity = "0";
    }) : "";
  }
  reveal() {
    isElementInViewport(this.elementsParent) && this.elementsParent.children ? [...this.elementsParent.children].map((element, i) => {
      element.style.transitionDelay = `${i / this.delayTime}s`;
      element.style.opacity = "1";
    }) : "";
  }
};

// resources/js/scroll.js
var ProgressScrollBar = class {
  constructor(element) {
    this.element = element;
  }
  init() {
    const progressIndicator = this.element;
    const totalHeight = document.body.scrollHeight - window.innerHeight;
    window.onscroll = function() {
      const progressIndicatorHeight = window.pageYOffset / totalHeight * 100;
      progressIndicator.style.height = progressIndicatorHeight + "%";
    };
  }
};
function scrollAnimations() {
  const allRevealChildrenOfTrigger = document.querySelectorAll(".reveal-from__trigger");
  allRevealChildrenOfTrigger && allRevealChildrenOfTrigger.forEach((element) => {
    new RevealChildrenOf(element, 10);
  });
}

// resources/js/modal.js
var __assign = function() {
  __assign = Object.assign || function(t) {
    for (var s, i = 1, n = arguments.length; i < n; i++) {
      s = arguments[i];
      for (var p in s)
        if (Object.prototype.hasOwnProperty.call(s, p))
          t[p] = s[p];
    }
    return t;
  };
  return __assign.apply(this, arguments);
};
var Default = {
  placement: "center",
  backdropClasses: "bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40",
  backdrop: "dynamic",
  closable: true,
  onHide: function() {
  },
  onShow: function() {
  },
  onToggle: function() {
  }
};
var Modal = function() {
  function Modal2(targetEl, options) {
    if (targetEl === void 0) {
      targetEl = null;
    }
    if (options === void 0) {
      options = Default;
    }
    this._targetEl = targetEl;
    this._options = __assign(__assign({}, Default), options);
    this._isHidden = true;
    this._backdropEl = null;
    this._init();
  }
  Modal2.prototype._init = function() {
    var _this = this;
    if (this._targetEl) {
      this._getPlacementClasses().map(function(c) {
        _this._targetEl.classList.add(c);
      });
    }
  };
  Modal2.prototype._createBackdrop = function() {
    var _a;
    if (this._isHidden) {
      var backdropEl = document.createElement("div");
      backdropEl.setAttribute("modal-backdrop", "");
      (_a = backdropEl.classList).add.apply(_a, this._options.backdropClasses.split(" "));
      document.querySelector("body").append(backdropEl);
      this._backdropEl = backdropEl;
    }
  };
  Modal2.prototype._destroyBackdropEl = function() {
    if (!this._isHidden) {
      document.querySelector("[modal-backdrop]").remove();
    }
  };
  Modal2.prototype._setupModalCloseEventListeners = function() {
    var _this = this;
    if (this._options.backdrop === "dynamic") {
      this._clickOutsideEventListener = function(ev) {
        _this._handleOutsideClick(ev.target);
      };
      this._targetEl.addEventListener("click", this._clickOutsideEventListener, true);
    }
    this._keydownEventListener = function(ev) {
      if (ev.key === "Escape") {
        _this.hide();
      }
    };
    document.body.addEventListener("keydown", this._keydownEventListener, true);
  };
  Modal2.prototype._removeModalCloseEventListeners = function() {
    if (this._options.backdrop === "dynamic") {
      this._targetEl.removeEventListener("click", this._clickOutsideEventListener, true);
    }
    document.body.removeEventListener("keydown", this._keydownEventListener, true);
  };
  Modal2.prototype._handleOutsideClick = function(target) {
    if (target === this._targetEl || target === this._backdropEl && this.isVisible()) {
      this.hide();
    }
  };
  Modal2.prototype._getPlacementClasses = function() {
    switch (this._options.placement) {
      case "top-left":
        return ["justify-start", "items-start"];
      case "top-center":
        return ["justify-center", "items-start"];
      case "top-right":
        return ["justify-end", "items-start"];
      case "center-left":
        return ["justify-start", "items-center"];
      case "center":
        return ["justify-center", "items-center"];
      case "center-right":
        return ["justify-end", "items-center"];
      case "bottom-left":
        return ["justify-start", "items-end"];
      case "bottom-center":
        return ["justify-center", "items-end"];
      case "bottom-right":
        return ["justify-end", "items-end"];
      default:
        return ["justify-center", "items-center"];
    }
  };
  Modal2.prototype.toggle = function() {
    if (this._isHidden) {
      this.show();
    } else {
      this.hide();
    }
    this._options.onToggle(this);
  };
  Modal2.prototype.show = function() {
    if (this.isHidden) {
      this._targetEl.classList.add("flex");
      this._targetEl.classList.remove("modal-hidden");
      this._targetEl.setAttribute("aria-modal", "true");
      this._targetEl.setAttribute("role", "dialog");
      this._targetEl.removeAttribute("aria-hidden");
      this._createBackdrop();
      this._isHidden = false;
      document.body.classList.add("overflow-hidden");
      if (this._options.closable) {
        this._setupModalCloseEventListeners();
      }
      this._options.onShow(this);
    }
  };
  Modal2.prototype.hide = function() {
    if (this.isVisible) {
      this._targetEl.classList.add("modal-hidden");
      this._targetEl.classList.remove("flex");
      this._targetEl.setAttribute("aria-hidden", "true");
      this._targetEl.removeAttribute("aria-modal");
      this._targetEl.removeAttribute("role");
      this._destroyBackdropEl();
      this._isHidden = true;
      document.body.classList.remove("overflow-hidden");
      if (this._options.closable) {
        this._removeModalCloseEventListeners();
      }
      this._options.onHide(this);
    }
  };
  Modal2.prototype.isVisible = function() {
    return !this._isHidden;
  };
  Modal2.prototype.isHidden = function() {
    return this._isHidden;
  };
  return Modal2;
}();
if (typeof window !== "undefined") {
  window.Modal = Modal;
}
var modal_default = Modal;

// resources/js/cookies.js
var import_ga_gtag = __toModule(require_lib());
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1e3);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function deleteCookie(cname) {
  const d = new Date();
  d.setTime(d.getTime() + 24 * 60 * 60 * 1e3);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=;" + expires + ";path=/";
}
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function acceptCookieConsent(cookieName, duration) {
  deleteCookie(cookieName);
  (0, import_ga_gtag.gtag)("consent", "update", {
    ad_storage: "granted",
    analytics_storage: "granted"
  });
  setCookie(cookieName, 1, duration);
}
function handleCookiesAccept(modalNode, modalObject, cookieName, ...rest) {
  let cookie_consent = getCookie(cookieName);
  if (cookie_consent === "1" && cookieName === "user_cookie_consent") {
    (0, import_ga_gtag.gtag)("consent", "update", {
      ad_storage: "granted",
      analytics_storage: "granted"
    });
  }
  if (cookie_consent === "" && cookieName === "user_cookie_consent") {
    setTimeout(() => {
      modalObject.show();
    }, 2500);
  }
  if (cookie_consent === "" && cookieName === "adult_user_cookie_consent") {
    modalObject.show();
  }
  if (cookie_consent === "1" && rest) {
    rest.forEach((handler) => {
      if (!typeof handler === "function")
        return;
      handler();
    });
  }
  modalNode.addEventListener("click", (e) => {
    if (e.target.id === "reject" && cookieName === "adult_user_cookie_consent") {
      return;
    }
    if (e.target.id === "reject") {
      modalObject.hide();
      return;
    }
    if (e.target.id === "accept") {
      acceptCookieConsent(cookieName, 0.04);
      const isHiddenPromise = new Promise((resolve, reject) => {
        console.log("resolved");
        resolve(modalObject.hide());
      });
      isHiddenPromise.then(() => {
        if (rest) {
          rest.forEach((handler) => {
            handler();
          });
        }
      });
    }
  });
}

// resources/js/app.js
var import_ga_gtag2 = __toModule(require_lib());
window.addEventListener("load", function() {
  const pageContent = document.querySelector("#page");
  pageContent.classList.remove("opacity-0");
  pageContent.classList.add("opacity-100");
  menu();
  const progress = new ProgressScrollBar(document.querySelector("#progressBar"));
  progress.init();
  (0, import_ga_gtag2.install)("UA-130569087-3", { send_page_view: false });
  (0, import_ga_gtag2.gtag)("consent", "default", {
    ad_storage: "denied",
    analytics_storage: "denied"
  });
  scrollAnimations();
  const modalElementCookiesGeneral = document.querySelector("#modalGeneralCookies");
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
    }
  };
  const modalCookiesGeneral = new modal_default(modalElementCookiesGeneral, modalOptionsCookiesGeneral);
  const modalElementAdultery = document.querySelector("#modalElAdultery");
  const modalOptionsAdultery = {
    placement: "center-center",
    backdrop: "dynamic",
    backdropClasses: "bg-gray-900 bg-opacity-50 backdrop-blur-3xl fixed inset-0 z-40",
    closable: false,
    onHide: () => {
      console.log("modal is hidden");
    },
    onShow: () => {
      console.log("modal is shown");
    },
    onToggle: () => {
      console.log("modal has been toggled");
    }
  };
  function handleGeneralCookies() {
    handleCookiesAccept(modalElementCookiesGeneral, modalCookiesGeneral, "user_cookie_consent");
  }
  function handleCookiesAdultery() {
    const modalCookiesAdultery = new modal_default(modalElementAdultery, modalOptionsAdultery);
    handleCookiesAccept(modalElementAdultery, modalCookiesAdultery, "adult_user_cookie_consent", handleGeneralCookies);
  }
  if (!modalElementAdultery) {
    handleGeneralCookies();
  }
  if (modalElementAdultery) {
    handleCookiesAdultery();
  }
});
/*! luxy.js v0.0.7 | (c) 2018 Mineo Okuda | MIT License | git+ssh://git@github.com:min30327/luxy.git */
