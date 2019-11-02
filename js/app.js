;
(function ($) {
    $(document).ready(function () {
        $(".menuBar").click(function (e) {
            $(".main-nav").addClass("open");
        });
        $(".close").click(function (e) {
            $(".main-nav").removeClass("open");
        });









        /* 
         * Owl Carosel
         */
        let feature_slider = $(".feature-post-slider");
        feature_slider.owlCarousel({
            loop: true,
            dots: false,
            autoplay: true,
            center: true,
            margin: 5,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                600: {
                    items: 2
                },
                1024: {
                    items: 3,
                    autoplay: false
                }
            }
        });
    });
})(jQuery)