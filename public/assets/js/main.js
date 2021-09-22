function toggleHeader() {
  // check if opened
  // if open remove open from classlist and add closed
  // else remove closed from classlist and add open
  let topbar = document.getElementById("top-bar");
  if (topbar.classList.contains("open")) {
    topbar.classList.remove("open");
    topbar.classList.add("closed");
  } else {
    topbar.classList.remove("closed");
    topbar.classList.add("open");
  }
}

//aos
AOS.init({
  once: true,
});

//fixed navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 170) {
    $(".top-bar").hide();
    $(".main-menu").addClass("nav-bg");
  } else {
    $(".top-bar").show();
    $(".main-menu").removeClass("nav-bg");
  }
});


