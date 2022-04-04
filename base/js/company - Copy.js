$(".bb_slideshow_content").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000, //2000ms = 2s;
    autoplayHoverPause: true,
    items: 1,
    dots:false,    
});

$(".bb_company_track").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000, //2000ms = 2s;
    autoplayHoverPause: true,
    dots:false,
    responsive: {
        0: {
            items: 1
        },
        400: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 5
        }
    }
});