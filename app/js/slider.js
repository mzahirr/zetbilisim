$(document).ready(function() {
    $('.slider').owlCarousel({
        center:true,
        margin: 0,
        items:1,
        loop: true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsive: {
            600: {
              items: 1
                }
            },  
        nav:true,
        navText: [$('.header-buton-ileri'),$('.header-buton-geri')]

        });
    $('.slider2').owlCarousel({
        center:false,
        margin: 0,
        items:2,
        loop: true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsive: {
            600: {
              items: 2
            }
        }
    });
    $('.slider3').owlCarousel({
        center:false,
        margin: 0,
        items:2,
        loop: true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsive: {
            600: {
              items: 6
            }
        }
    });
})