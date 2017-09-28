$(document).ready(function() {
    $('.slider').owlCarousel({
        center:true,
        margin: 0,
        loop: true,
        items: 1,
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
        loop: true,
        items:1,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsive: {
            0:{
                items: 1
            },
            850: {
              items: 2
                }
            },
        nav:true,
        navText: [$('.portfolyo-ileri'),$('.portfolyo-geri')]

    });
    $('.slider3').owlCarousel({
        center:false,
        margin: 0,
        items:6,
        loop: true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsive: {
            600: {
              items: 6
                }
            },
        nav:true,
        navText: [$('.portfolyo-ileri2'),$('.portfolyo-geri2')]
    });
})