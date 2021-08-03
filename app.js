window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});
//Loading Animation
let spinnerWrapper = document.querySelector(".spinner-wrapper");
window.addEventListener("load", function () {
  // spinnerWrapper.style.display = 'none';
  spinnerWrapper.parentElement.removeChild(spinnerWrapper);
});

// Play Video on Mouse Hover and Pause on Mouseout
const clip = document.querySelectorAll(".clip");
for (let i = 0; i < clip.length; i++) {
  clip[i].addEventListener("mouseenter", function (e) {
    clip[i].play();
  });
  clip[i].addEventListener("mouseout", function (e) {
    clip[i].pause();
  });
}

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

$(".alert-success").delay(3200).fadeOut(300);
$(".alert-error").delay(3200).fadeOut(300);
