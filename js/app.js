;
(function ($) {
    $(document).ready(function () {
        $(".menuBar").click(function (e) {
            $(".main-nav").addClass("open");
            $("#page-contianer").addClass("m-menu-open");
        });
        $(".close").click(function (e) {
            $(".main-nav").removeClass("open");
            $("#page-contianer").removeClass("m-menu-open");
        });

        $("html").on("click", function (e) {
            if (e.target.id == "page-contianer") {
                $(".main-nav").removeClass("open");
                $("#page-contianer").removeClass("m-menu-open");
            }
        });
        $(".social_btn").click(function (e) {

            if ($(".social_btns").hasClass("social-open") == true) {
                $(".social_btns").removeClass("social-open");
            } else {
                $(".social_btns").addClass("social-open");
            }
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