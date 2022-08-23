ScrollReveal().reveal('.headline', { delay: 200});


window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  var navbar= document.getElementById("navbar");
  var logo=document.getElementById("logo");
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    navbar.style.position = "fixed";
    navbar.style.top = "0";
    navbar.style.opacity = ".5";
    logo.style.width = "175px";
    logo.style.height = "75px";
    logo.style.top = "0";
  } else {
    navbar.style.position = "relative";
    navbar.style.top = "";
    navbar.style.opacity = "1";
    logo.style.width = "225px";
    logo.style.height = "125px";
    logo.style.top = "-53px";
  }
}