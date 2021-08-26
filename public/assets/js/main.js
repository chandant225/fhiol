// $(document).ready(function(){
//     $("#close").click(function(){
//       $("#top-bar").hide();
//     });
//     $("#close").click(function(){
//       $("#top-bar").show();
//     });
//   });
//   $(window).click(function () {
//     if ($("#close").click) {
//         $('#top-bar').show();
//     } else {

//         $('#top-bar').hide();
//     }
// });
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

// if($('#top-bar').css('height') == '90px'){
//    console.log(true);
// $('#top-bar').css('height','0px');
// $('#top-bar').css('overflow-y','hidden');
// $('#close').removeClass('close');

// }else{
//    console.log(false);
// $('#top-bar').css('height','90px');
// $('#top-bar').css('overflow-y','auto');
// $('#close').addClass('close');

// }

//testi
const myCarousel = document.getElementById("myCarousel");
myCarousel.addEventListener("slid.bs.carousel", function () {
  const activeItem = this.querySelector(".active");
  document.querySelector(".testi-img img").src =
    activeItem.getAttribute("data-img");
  document.querySelector(".testi-img .circle").style.backgroundColor =
    activeItem.getAttribute("data-color");
});

//aos
AOS.init(
  {
    once: true
  }
);

//fixed navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 170) {
    $(".top-bar").hide();
    $('.main-menu').addClass("nav-bg")
  } else {
    $(".top-bar").show();
    $('.main-menu').removeClass("nav-bg")
  }
});
