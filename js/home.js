function a(){let o=document.querySelector("#heroScreenMarker"),e=document.querySelector("#heroImageHolder"),t={root:null,rootMargin:"0px"},s=(n,r)=>{n.forEach(i=>{i.isIntersecting&&(e.classList.add("fadeIn"),e.classList.remove("fadeOut")),i.isIntersecting||(e.classList.remove("fadeIn"),e.classList.add("fadeOut"))})};o&&new IntersectionObserver(s,t).observe(o)}function c(){let o=document.querySelectorAll(".zoom-in-out"),e={root:null,rootMargin:"100px"},t=(s,n)=>{s.forEach(r=>{r.isIntersecting&&(r.target.classList.add("zoomOut"),r.target.classList.remove("zoomIn")),r.isIntersecting||(r.target.classList.remove("zoomOut"),r.target.classList.add("zoomIn"))})};o&&o.forEach(s=>{new IntersectionObserver(t,e).observe(s)})}function l(){let o=document.querySelectorAll(".title-reveal");!o||o.forEach((e,t)=>{e.classList.add("title-reveal--revealed"),t>0&&(e.style.transitionDelay=`${t*.15}s`)})}window.addEventListener("load",function(){a(),c(),l()});
