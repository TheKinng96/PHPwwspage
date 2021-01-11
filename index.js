// get navbar hidden when scrolled
let prevScrollpos = window.pageYOffset;
let windowWidth = window.innerWidth;

window.onscroll = function() {
let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    if (windowWidth >= "992") {
      document.getElementById("navbar").style.top = "-9.5vw";
    } else {
      document.getElementById("navbar").style.top = "-45px";
    }
  }
  prevScrollpos = currentScrollPos;
}