 <!-- Scripts -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <script src="{{ asset('/js/app.js') }}"></script>


 <script>
     // Toastr Notification
     @if(Session::has('message'))
     var type = "{{ Session::get('alert-type', 'info') }}";
     switch (type) {
         case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;

         case 'warning':
             toastr.warning("{{ Session::get('message') }}");
             break;

         case 'success':
             toastr.success("{{ Session::get('message') }}");
             break;

         case 'error':
             toastr.error("{{ Session::get('message') }}");
             break;
     }
     @endif
 </script>
