$(document).ready(function () {



    // event owl carousel
    $("#event .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTime: 2000,
        dots: false,
        responsive: {
            0: {
                nav: false,
                items: 2
            },
           
           600: {
                nav: false,
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});

