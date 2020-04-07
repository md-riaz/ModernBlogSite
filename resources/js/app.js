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



          // Sweet alert 2 code===============================================
          $(document).on("click", "#delete", function (e) {
              e.preventDefault();
              const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                  confirmButton: 'btn btn-danger',
                  cancelButton: 'btn btn-success'
              },
              buttonsStyling: false
          })

          swalWithBootstrapButtons.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'No, cancel!',
              reverseButtons: true
          }).then((result) => {
              if (result.value) {
                  swalWithBootstrapButtons.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                  );
                  // Get action url from data attribute
                  $action = $(this).data("action");
                  //  Set delete form action attribute to that url
                  $("#deleteForm").attr('action', $action) ;
                  // Submit the form
                  $("#deleteForm").submit();
              } else if (
                  /* Read more about handling dismissals below */
                  result.dismiss === Swal.DismissReason.cancel
              ) {
                  swalWithBootstrapButtons.fire(
                      'Cancelled',
                      'Your imaginary file is safe :)',
                      'error'
                  )
              }
          })
          });
                
    });
})(jQuery)


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
