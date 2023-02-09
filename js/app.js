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

// resources/js/app.js
var import_luxy = __toModule(require_luxy_min());
window.addEventListener("load", function() {
  const main_navigation = document.querySelector("#primary-menu");
  document.querySelector("#primary-menu-toggle").addEventListener("click", function(e) {
    e.preventDefault();
    main_navigation.classList.toggle("hidden");
  });
  import_luxy.default.init();
});
/*! luxy.js v0.0.7 | (c) 2018 Mineo Okuda | MIT License | git+ssh://git@github.com:min30327/luxy.git */
