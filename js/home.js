function a(){let e=document.querySelector("#heroScreenMarker"),o=document.querySelector("#heroImageHolder"),t={root:null,rootMargin:"0px"},s=(n,r)=>{n.forEach(c=>{c.isIntersecting&&(o.classList.add("fadeIn"),o.classList.remove("fadeOut")),c.isIntersecting||(o.classList.remove("fadeIn"),o.classList.add("fadeOut"))})};e&&new IntersectionObserver(s,t).observe(e)}function i(){let e=document.querySelectorAll(".zoom-in-out"),o={root:null,rootMargin:"100px"},t=(s,n)=>{s.forEach(r=>{r.isIntersecting&&(r.target.classList.add("zoomOut"),r.target.classList.remove("zoomIn")),r.isIntersecting||(r.target.classList.remove("zoomOut"),r.target.classList.add("zoomIn"))})};e&&e.forEach(s=>{new IntersectionObserver(t,o).observe(s)})}function l(){let e=document.querySelectorAll(".title-reveal");console.log(e),!!e&&e.forEach((o,t)=>{o.classList.add("title-reveal--revealed"),t>0&&(o.style.transitionDelay=`${t*.15}s`)})}window.addEventListener("load",function(){a(),i(),l()});
