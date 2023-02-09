export default function onMouseOverListener() {
  document.addEventListener("mouseover", function (e) {
    if (e.target.classList.contains("zoom-in-out")) {
      console.log(e.target);
    }
  });
}
