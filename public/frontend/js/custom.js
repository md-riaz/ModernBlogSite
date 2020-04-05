;
(function ($) {
    $(document).ready(function () {

//menuBar
$(".menuBar").click(function (e) {
            $(".main-nav").addClass("open");
            $("#page-contianer").addClass("m-menu-open");
        });
        //Close btn
        $(".close").click(function (e) {
            $(".main-nav").removeClass("open");
            $("#page-contianer").removeClass("m-menu-open");
        });
        //close menu on outside click
        $("html").on("click", function (e) {
            if (e.target.id == "page-contianer") {
                $(".main-nav").removeClass("open");
                $("#page-contianer").removeClass("m-menu-open");
            }
        });
        //Social btn
        $(".social_btn").click(function (e) {

            if ($(".social_btns").hasClass("social-open") == true) {
                $(".social_btns").removeClass("social-open");
            } else {
                $(".social_btns").addClass("social-open");
            }
        });


        
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

        //Carosel Nav Buttons
        $(".btn-prev").click(function (e) {
            feature_slider.trigger('prev.owl.carousel');
        });
        $(".btn-next").click(function (e) {
            feature_slider.trigger('next.owl.carousel');
        });
                
    });
})(jQuery)

