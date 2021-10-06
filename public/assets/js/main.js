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

$(".testimonial-slider").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: true,
    navText: [
        `<i class="fas fa-chevron-circle-left"></i>`,
        `<i class="fas fa-chevron-circle-right"></i>`,
    ],
    dots: false,
    lazyLoad: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            nav: true,
        },
        600: {
            items: 2,
            nav: false,
        },
        1000: {
            items: 3,
            nav: true,
        },
    },
});
