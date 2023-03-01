var O=Object.create;var k=Object.defineProperty;var P=Object.getOwnPropertyDescriptor;var B=Object.getOwnPropertyNames;var R=Object.getPrototypeOf,G=Object.prototype.hasOwnProperty;var Y=o=>k(o,"__esModule",{value:!0});var D=(o,e)=>()=>(e||o((e={exports:{}}).exports,e),e.exports);var F=(o,e,s)=>{if(e&&typeof e=="object"||typeof e=="function")for(let n of B(e))!G.call(o,n)&&n!=="default"&&k(o,n,{get:()=>e[n],enumerable:!(s=P(e,n))||s.enumerable});return o},W=o=>F(Y(k(o!=null?O(R(o)):{},"default",o&&o.__esModule&&"default"in o?{get:()=>o.default,enumerable:!0}:{value:o,enumerable:!0})),o);var q=D((_,M)=>{(function(o,e){"use strict";typeof define=="function"&&define.amd?define([],e):typeof _=="object"?M.exports=e():o.luxy=e()})(_,function(){"use strict";var o={wrapper:"#luxy",targets:".luxy-el",wrapperSpeed:.08,targetSpeed:.02,targetPercentage:.1},e=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame;window.requestAnimationFrame=e;var s=window.cancelAnimationFrame||window.mozCancelAnimationFrame,n=function(){for(var t={},c=0,d=arguments.length;c<d;c++){var m=arguments[c];(function(p){for(var b in p)p.hasOwnProperty(b)&&(t[b]=p[b])})(m)}return t},r=function(){this.Targets=[],this.TargetsLength=0,this.wrapper="",this.windowHeight=0,this.wapperOffset=0};return r.prototype={isAnimate:!1,isResize:!1,scrollId:"",resizeId:"",init:function(t){if(this.settings=n(o,t||{}),this.wrapper=document.querySelector(this.settings.wrapper),this.wrapper==="undefined")return!1;this.targets=document.querySelectorAll(this.settings.targets),document.body.style.height=this.wrapper.clientHeight+"px",this.windowHeight=window.clientHeight,this.attachEvent(),this.apply(this.targets,this.wrapper),this.animate(),this.resize()},apply:function(t,c){this.wrapperInit(),this.targetsLength=t.length;for(var d=0;d<this.targetsLength;d++){var m={offset:t[d].getAttribute("data-offset"),speedX:t[d].getAttribute("data-speed-x"),speedY:t[d].getAttribute("data-speed-Y"),percentage:t[d].getAttribute("data-percentage"),horizontal:t[d].getAttribute("data-horizontal")};this.targetsInit(t[d],m)}},wrapperInit:function(){this.wrapper.style.width="100%",this.wrapper.style.position="fixed"},targetsInit:function(t,c){this.Targets.push({elm:t,offset:c.offset?c.offset:0,horizontal:c.horizontal?c.horizontal:0,top:0,left:0,speedX:c.speedX?c.speedX:1,speedY:c.speedY?c.speedY:1,percentage:c.percentage?c.percentage:0})},scroll:function(){document.documentElement.scrollTop||document.body.scrollTop,this.scrollTop=document.documentElement.scrollTop||document.body.scrollTop,this.scrollTop,this.windowHeight,this.wrapperUpdate(this.scrollTop);for(var t=0;t<this.Targets.length;t++)this.targetsUpdate(this.Targets[t])},animate:function(){this.scroll(),this.scrollId=e(this.animate.bind(this))},wrapperUpdate:function(){this.wapperOffset+=(this.scrollTop-this.wapperOffset)*this.settings.wrapperSpeed,this.wrapper.style.transform="translate3d(0,"+Math.round(100*-this.wapperOffset)/100+"px ,0)"},targetsUpdate:function(t){t.top+=(this.scrollTop*Number(this.settings.targetSpeed)*Number(t.speedY)-t.top)*this.settings.targetPercentage,t.left+=(this.scrollTop*Number(this.settings.targetSpeed)*Number(t.speedX)-t.left)*this.settings.targetPercentage;var c=parseInt(t.percentage)-t.top-parseInt(t.offset),d=Math.round(-100*c)/100,m=0;if(t.horizontal){var p=parseInt(t.percentage)-t.left-parseInt(t.offset);m=Math.round(-100*p)/100}t.elm.style.transform="translate3d("+m+"px ,"+d+"px ,0)"},resize:function(){var t=this;t.windowHeight=window.innerHeight||document.documentElement.clientHeight||0,parseInt(t.wrapper.clientHeight)!=parseInt(document.body.style.height)&&(document.body.style.height=t.wrapper.clientHeight+"px"),t.resizeId=e(t.resize.bind(t))},attachEvent:function(){var t=this;window.addEventListener("resize",function(){t.isResize||(s(t.resizeId),s(t.scrollId),t.isResize=!0,setTimeout(function(){t.isResize=!1,t.resizeId=e(t.resize.bind(t)),t.scrollId=e(t.animate.bind(t))},200))})}},new r})});var I=(o,e,s)=>{let n=()=>{s(),o.removeEventListener(e,n)};o.addEventListener(e,n)};var H=W(q());function L(){let o=window.matchMedia("(max-width: 1280px)"),e=window.matchMedia("(min-width: 1280px)"),s=document.querySelector(".desktop-menu")||document.querySelector(".desktop-menu--home"),n=0;function r(i){i.setAttribute("data-collapsed","true"),i.classList.remove("sub-menu--expanded");let u=i.scrollHeight,l=i.style.transition;i.style.transition="",requestAnimationFrame(function(){i.style.height=u+"px",i.style.transition=l,requestAnimationFrame(function(){i.style.height=0+"px"})})}function t(i){let u=i.scrollHeight;i.style.height=u+"px",I(i,"transitionend",function(g){i.style.height=null}),i.setAttribute("data-collapsed","false"),i.classList.add("sub-menu--expanded")}function c(i){let u=i.target;u.classList.toggle("show-submenu__toggled");let l=u.nextElementSibling,g=l.getAttribute("data-collapsed")==="true";g?t(l):r(l),g&&!i.target.matches(".show-submenu")&&!i.target.closest(".sub-menu")&&r(l)}let d=()=>{let i=document.querySelector("#content"),u=document.querySelector("#mobileMenuToggle"),l=!1;if(!u)return;document.addEventListener("click",function(a){if(a.target.matches("#mobileMenuToggle")||a.target.closest("#mobileMenuToggle")){mobileMenuWrapper.classList.toggle("toggled"),i.classList.toggle("overlay--active"),l=!l;return}if(l&&!a.target.closest("#mobileMenuWrapper")){mobileMenuWrapper.classList.toggle("toggled"),i.classList.toggle("overlay--active"),l=!l;return}console.log(a.target)});let g=document.querySelector(".mobile-menu");if(!g)return;g.querySelectorAll(".menu-item-has-children").forEach(a=>{a.querySelector(".sub-menu")&&a.querySelector(".sub-menu").setAttribute("data-collapsed","true")}),document.addEventListener("click",function(a){a.target.classList.contains("show-submenu")&&c(a)})};function m(i){i.matches&&(console.log("Media Query Mobile Matched!"),d())}o.addListener(m),m(o);let p=()=>{let i=document.querySelector(".desktop-menu--home"),u=document.querySelectorAll(".sub-menu"),l=!1;if(!i)return;i.querySelectorAll(".menu-item-has-children").forEach(h=>{h.querySelector(".sub-menu")&&h.querySelector(".sub-menu").setAttribute("data-collapsed","true")}),document.addEventListener("click",function(h){if(h.target.classList.contains("show-submenu")){let a=h.target,f=a.nextElementSibling,E=f.getAttribute("data-collapsed")==="true";a.classList.toggle("show-submenu__toggled"),E?(t(f),l=!0):(r(f),l=!1)}l&&!h.target.matches(".show-submenu")&&!h.target.closest(".sub-menu")&&(u.forEach(a=>{r(a)}),i.querySelectorAll(".show-submenu").forEach(a=>{a.classList.remove("show-submenu__toggled")}),l=!1)})},b=()=>{let i=document.querySelector(".desktop-menu--global"),u=document.querySelectorAll(".sub-menu"),l=!1;if(!i)return;i.querySelectorAll(".menu-item-has-children").forEach(h=>{h.querySelector(".sub-menu")&&h.querySelector(".sub-menu").setAttribute("data-collapsed","true")}),document.addEventListener("click",function(h){if(h.target.classList.contains("show-submenu")){let a=h.target,f=a.nextElementSibling,E=f.getAttribute("data-collapsed")==="true";a.classList.toggle("show-submenu__toggled"),E?(t(f),l=!0):(r(f),l=!1)}l&&!h.target.matches(".show-submenu")&&!h.target.closest(".sub-menu")&&(u.forEach(a=>{r(a)}),i.querySelectorAll(".show-submenu").forEach(a=>{a.classList.remove("show-submenu__toggled")}),l=!1)})};function C(i){i.matches&&(console.log("Media Query Desktop Matched!"),p(),b(),H.default.init()),window.addEventListener("scroll",()=>{let u=window.pageYOffset||document.documentElement.scrollTop;u>n?s.classList.add("scrolled"):s.classList.remove("scrolled"),n=u<=0?0:u},!1)}e.addListener(C),C(e)}var A=o=>{let e=window.scrollY||window.pageYOffset,s=o.getBoundingClientRect().top+e,n={top:e,bottom:e+window.innerHeight},r={top:s,bottom:s+o.clientHeight};return r.bottom>=n.top&&r.bottom<=n.bottom||r.top<=n.bottom&&r.top>=n.top};var y=class{constructor(e,s){this.elementsParent=e,this.delayTime=s,!!e&&(this.hide(),A(this.elementsParent)?this.reveal():document.addEventListener("scroll",()=>{this.reveal()}))}hide(){this.elementsParent.children&&[...this.elementsParent.children].map((e,s)=>{e.style.opacity="0"})}reveal(){A(this.elementsParent)&&this.elementsParent.children&&[...this.elementsParent.children].map((e,s)=>{e.style.transitionDelay=`${s/this.delayTime}s`,e.style.opacity="1"})}};var w=class{constructor(e){this.element=e}init(){let e=this.element,s=document.body.scrollHeight-window.innerHeight;window.onscroll=function(){let n=window.pageYOffset/s*100;e.style.height=n+"%"}}};function T(){let o=document.querySelectorAll(".reveal-from__trigger");o&&o.forEach(e=>{new y(e,10)})}var v=function(){return v=Object.assign||function(o){for(var e,s=1,n=arguments.length;s<n;s++){e=arguments[s];for(var r in e)Object.prototype.hasOwnProperty.call(e,r)&&(o[r]=e[r])}return o},v.apply(this,arguments)},z={placement:"center",backdropClasses:"bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40",backdrop:"dynamic",closable:!0,onHide:function(){},onShow:function(){},onToggle:function(){}},j=function(){function o(e,s){e===void 0&&(e=null),s===void 0&&(s=z),this._targetEl=e,this._options=v(v({},z),s),this._isHidden=!0,this._backdropEl=null,this._init()}return o.prototype._init=function(){var e=this;this._targetEl&&this._getPlacementClasses().map(function(s){e._targetEl.classList.add(s)})},o.prototype._createBackdrop=function(){var e;if(this._isHidden){var s=document.createElement("div");s.setAttribute("modal-backdrop",""),(e=s.classList).add.apply(e,this._options.backdropClasses.split(" ")),document.querySelector("body").append(s),this._backdropEl=s}},o.prototype._destroyBackdropEl=function(){this._isHidden||document.querySelector("[modal-backdrop]").remove()},o.prototype._setupModalCloseEventListeners=function(){var e=this;this._options.backdrop==="dynamic"&&(this._clickOutsideEventListener=function(s){e._handleOutsideClick(s.target)},this._targetEl.addEventListener("click",this._clickOutsideEventListener,!0)),this._keydownEventListener=function(s){s.key==="Escape"&&e.hide()},document.body.addEventListener("keydown",this._keydownEventListener,!0)},o.prototype._removeModalCloseEventListeners=function(){this._options.backdrop==="dynamic"&&this._targetEl.removeEventListener("click",this._clickOutsideEventListener,!0),document.body.removeEventListener("keydown",this._keydownEventListener,!0)},o.prototype._handleOutsideClick=function(e){(e===this._targetEl||e===this._backdropEl&&this.isVisible())&&this.hide()},o.prototype._getPlacementClasses=function(){switch(this._options.placement){case"top-left":return["justify-start","items-start"];case"top-center":return["justify-center","items-start"];case"top-right":return["justify-end","items-start"];case"center-left":return["justify-start","items-center"];case"center":return["justify-center","items-center"];case"center-right":return["justify-end","items-center"];case"bottom-left":return["justify-start","items-end"];case"bottom-center":return["justify-center","items-end"];case"bottom-right":return["justify-end","items-end"];default:return["justify-center","items-center"]}},o.prototype.toggle=function(){this._isHidden?this.show():this.hide(),this._options.onToggle(this)},o.prototype.show=function(){this.isHidden&&(this._targetEl.classList.add("flex"),this._targetEl.classList.remove("modal-hidden"),this._targetEl.setAttribute("aria-modal","true"),this._targetEl.setAttribute("role","dialog"),this._targetEl.removeAttribute("aria-hidden"),this._createBackdrop(),this._isHidden=!1,document.body.classList.add("overflow-hidden"),this._options.closable&&this._setupModalCloseEventListeners(),this._options.onShow(this))},o.prototype.hide=function(){this.isVisible&&(this._targetEl.classList.add("modal-hidden"),this._targetEl.classList.remove("flex"),this._targetEl.setAttribute("aria-hidden","true"),this._targetEl.removeAttribute("aria-modal"),this._targetEl.removeAttribute("role"),this._destroyBackdropEl(),this._isHidden=!0,document.body.classList.remove("overflow-hidden"),this._options.closable&&this._removeModalCloseEventListeners(),this._options.onHide(this))},o.prototype.isVisible=function(){return!this._isHidden},o.prototype.isHidden=function(){return this._isHidden},o}();typeof window!="undefined"&&(window.Modal=j);var S=j;function U(o,e,s){let n=new Date;n.setTime(n.getTime()+s*24*60*60*1e3);let r="expires="+n.toUTCString();document.cookie=o+"="+e+";"+r+";path=/"}function V(o){let e=new Date;e.setTime(e.getTime()+24*60*60*1e3);let s="expires="+e.toUTCString();document.cookie=o+"=;"+s+";path=/"}function X(o){let e=o+"=",n=decodeURIComponent(document.cookie).split(";");for(let r=0;r<n.length;r++){let t=n[r];for(;t.charAt(0)==" ";)t=t.substring(1);if(t.indexOf(e)==0)return t.substring(e.length,t.length)}return""}function Q(o,e){V(o),U(o,1,e)}function x(o,e,s,...n){let r=X(s);r===""&&s==="user_cookie_consent"&&setTimeout(()=>{e.show()},2500),r===""&&s==="adult_user_cookie_consent"&&e.show(),r==="1"&&n&&n.forEach(t=>{!typeof t!=="function"&&t()}),o.addEventListener("click",t=>{if(!(t.target.id==="reject"&&s==="adult_user_cookie_consent")){if(t.target.id==="reject"){e.hide();return}t.target.id==="accept"&&(Q(s,.04),new Promise((d,m)=>{console.log("resolved"),d(e.hide())}).then(()=>{n&&n.forEach(d=>{d()})}))}})}window.addEventListener("load",function(){let o=document.querySelector("#page");o.classList.remove("opacity-0"),o.classList.add("opacity-100"),L(),new w(document.querySelector("#progressBar")).init(),T();let s=document.querySelector("#modalGeneralCookies"),n={placement:"bottom-left",backdrop:"dynamic",backdropClasses:"bg-gray-900 bg-opacity-50 fixed inset-0 z-40",closable:!1,onHide:()=>{console.log("modal is hidden")},onShow:()=>{console.log("modal is shown")},onToggle:()=>{console.log("modal has been toggled")}},r=new S(s,n),t=document.querySelector("#modalElAdultery"),c={placement:"center-center",backdrop:"dynamic",backdropClasses:"bg-gray-900 bg-opacity-50 backdrop-blur-3xl fixed inset-0 z-40",closable:!1,onHide:()=>{console.log("modal is hidden")},onShow:()=>{console.log("modal is shown")},onToggle:()=>{console.log("modal has been toggled")}};function d(){x(s,r,"user_cookie_consent")}function m(){let p=new S(t,c);x(t,p,"adult_user_cookie_consent",d)}t||d(),t&&m()});
/*! luxy.js v0.0.7 | (c) 2018 Mineo Okuda | MIT License | git+ssh://git@github.com:min30327/luxy.git */
