$(function () {
    const MVS = new Swiper('.main_visual_slide', {
        direction: 'vertical',
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".main_visual .page",
            clickable: true,
        },
    })
})