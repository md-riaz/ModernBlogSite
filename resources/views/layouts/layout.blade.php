<!DOCTYPE html>
<li lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('siteTitle')</title>
        <link rel="shortcut icon" href="{{ asset('public/frontend/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{ asset('public/frontend/favicon.ico')}}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css')}}">
    </head>

    <body>
        <div id="page-contianer">

            <header class="header">
                <div class="header_inside d_flex">
                    <div class="navigation-container">
                        <div class="menuBar"><i class="fas fa-bars"></i></div>
                        <div class="main-nav">
                            <nav>
                                <div class="close"><i class="fas fa-times"></i></div>
                                <ul class="menu">
                                    <li><a href="{{ URL::to('/') }}">home</a></li>
                                    <li class="multi-nav"><a href="#" class="">features</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Classic</a></li>
                                            <li class="menu-item"><a href="#">Two Columns</a></li>
                                            <li class="menu-item"><a href="#">Three Columns</a></li>
                                            <li class="menu-item"><a href="#">Masonry</a></li>
                                            <li class="menu-item"><a href="#">Visual Right 1</a></li>
                                            <li class="menu-item"><a href="#">Visual Right 2</a></li>
                                            <li class="menu-item"><a href="#">Visual Left 1</a></li>
                                            <li class="menu-item"><a href="#">Visual Left 2</a></li>
                                            <li class="menu-item"><a href="#">Fusion 1</a></li>
                                            <li class="menu-item"><a href="#">Fusion 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">posttypes</a></li>
                                    <li><a href={{ route('admin.page') }}>admin</a></li>
                                    <li class="multi-nav"><a href="#">categories</a>
                                        <ul class="sub-menu">
                                            @php
                                            $categories = DB::table('categories')->get();
                                            @endphp
                                            @foreach ($categories as $category)
                                            <li class="menu-item"><a href="#">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="#">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="social_btns">
                        <div class="social_btn">
                            <i class="fas fa-share-alt"></i>
                        </div>

                        <div class="social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
                <div class="logo-container bottom_bar">
                    <a href="#">Noémi</a>
                </div>
            </header>
            <!--   Header Section End -->

            <main id="main-content">
                @yield('FeaturePost')




                <section class="Contents">
                    <div class="container d_flex">
                        <div class="innerContainer" style="width: calc(100% - 365px);">

                            @yield('content')

                        </div>
                        <!--   Side Bar -->

                        <section class="side-content">
                            <div class="about_me">
                                <div class="about_me_inner d_flex">
                                    <div class="avtar">
                                        <img src="{{ asset('public/frontend/img/me.png')}}" alt="my_avtar">
                                    </div>
                                    <div class="title">about me</div>
                                    <p class="texts">Hi! Dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever </p>
                                    <div class="follow_buttons">
                                        <p class="follow">follow me on
                                        </p>
                                        <div class="social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe">
                                <h3 class="bottom_bar">newshelter</h3>
                                <input type="email" name="email" id="email" placeholder="your email address">
                                <button class="flat-btn">subscribe</button>
                            </div>
                            <div class="follow_insta">
                                <h3 class="bottom_bar">follow@noemi.theme</h3>
                                <div class="photo_grid d_flex">
                                    <img src="{{ asset('public/frontend/img/photo_grid/1.jpg')}}" alt="grid_image">
                                    <img src="{{ asset('public/frontend/img/photo_grid/2.jpg')}}" alt="grid_image">
                                    <img src="{{ asset('public/frontend/img/photo_grid/3.jpg')}}" alt="grid_image">
                                    <img src="{{ asset('public/frontend/img/photo_grid/4.jpg')}}" alt="grid_image">
                                    <img src="{{ asset('public/frontend/img/photo_grid/5.jpg')}}" alt="grid_image">
                                    <img src="{{ asset('public/frontend/img/photo_grid/6.jpg')}}" alt="grid_image">
                                    <img src="{{ asset('public/frontend/img/photo_grid/7.jpg')}}" alt="grid_image">
                                    <img src="{{ asset('public/frontend/img/photo_grid/8.jpg')}}" alt="grid_image">
                                    <img src="{{ asset('public/frontend/img/photo_grid/9.jpg')}}" alt="grid_image">
                                </div>
                            </div>
                            <div class="category_section">
                                <h3 class="bottom_bar">categories</h3>
                                <ul>
                                    <li><a href="#">Beauty</a> <span>12</span></li>
                                    <li><a href="#">Health</a> <span>4</span></li>
                                    <li><a href="#">Lifestyle</a> <span>145</span></li>
                                    <li><a href="#">Music</a> <span>28</span></li>
                                    <li><a href="#">Sport</a> <span>62</span></li>
                                    <li><a href="#">Yoga</a> <span>8</span></li>
                                </ul>
                            </div>
                            <div class="latest_posts">
                                <h3 class="bottom_bar">recent posts</h3>

                                <div class="latest_post_wrapper">

                                    <div class="latest_post d_flex">
                                        <div class="latest_post_preview_img">
                                            <img src="{{ asset('public/frontend/img/Latest/post_1.jpg')}}"
                                                alt="preview_img">
                                        </div>
                                        <div class="posts_desc">
                                            <p class="date">June 14, 2015
                                            </p>
                                            <a href="">
                                                <h3 class="title">Lorem Ipsum right now.
                                                </h3>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="latest_post d_flex">
                                        <div class="latest_post_preview_img">
                                            <img src="{{ asset('public/frontend/img/Latest/post_2.jpg')}}"
                                                alt="preview_img">
                                        </div>
                                        <div class="posts_desc">
                                            <p class="date">June 14, 2015
                                            </p>
                                            <a href=""></a>
                                            <h3 class="title">Lorem Ipsum Dolor
                                                available.
                                            </h3></a>
                                        </div>
                                    </div>

                                    <div class="latest_post d_flex">
                                        <div class="latest_post_preview_img">
                                            <img src="{{ asset('public/frontend/img/Latest/post_3.jpg')}}"
                                                alt="preview_img">
                                        </div>
                                        <div class="posts_desc">
                                            <p class="date">June 14, 2015
                                            </p>
                                            <a href="">
                                                <h3 class="title">Lorem Ipsum available
                                                    right now.
                                                </h3>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="latest_post d_flex">
                                        <div class="latest_post_preview_img">
                                            <img src="{{ asset('public/frontend/img/Latest/post_4.jpg')}}"
                                                alt="preview_img">
                                        </div>
                                        <div class="posts_desc">
                                            <p class="date">June 14, 2015
                                            </p>
                                            <a href="">
                                                <h3 class="title">Lorem Ipsum available
                                                    right now.
                                                </h3>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="latest_post d_flex">
                                        <div class="latest_post_preview_img">
                                            <img src="{{ asset('public/frontend/img/Latest/post_5.jpg')}}"
                                                alt="preview_img">
                                        </div>
                                        <div class="posts_desc">
                                            <p class="date">June 14, 2015
                                            </p>
                                            <a href="">
                                                <h3 class="title">Lorem Ipsum available
                                                    right now.
                                                </h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="search_bar d_flex">
                                <input type="text" name="search" id="search" placeholder="search...">
                                <button class="flat-btn"><i class="fas fa-search"></i></button>
                            </div>

                            <div class="banner">
                                <h3 class="bottom_bar">banner</h3>
                                <div class="banner_img">
                                    <img src="{{ asset('public/frontend/img/banner.jpg')}}" alt="banner_img">
                                </div>
                            </div>

                            <div class="follow_fb">
                                <h3 class="bottom_bar">find us on Facebook</h3>
                                <div class="fb_frame">

                                </div>
                            </div>

                            <div class="tags">
                                <h3 class="bottom_bar">tags</h3>
                                <ul class="taglist d_flex">
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">music</a></li>
                                    <li><a href="#">lorem tag</a></li>
                                    <li><a href="#">tag</a></li>
                                    <li><a href="#">ipsum tag</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">music</a></li>
                                </ul>
                            </div>
                        </section>

                    </div>
                </section>
            </main>


            <footer id="main-footer">
                <div class="follow_insta">
                    <h3 class="title">follow@noemi.theme</h3>
                    <a class="follow" href="#"><i class="fab fa-instagram"></i>instagram
                    </a>
                    <div class="photo_grid d_flex">
                        <img src="{{ asset('public/frontend/img/photo_grid/1.jpg')}}" alt="grid_image">
                        <img src="{{ asset('public/frontend/img/photo_grid/2.jpg')}}" alt="grid_image">
                        <img src="{{ asset('public/frontend/img/photo_grid/3.jpg')}}" alt="grid_image">
                        <img src="{{ asset('public/frontend/img/photo_grid/4.jpg')}}" alt="grid_image">
                        <img src="{{ asset('public/frontend/img/photo_grid/5.jpg')}}" alt="grid_image">
                        <img src="{{ asset('public/frontend/img/photo_grid/7.jpg')}}" alt="grid_image">
                        <img src="{{ asset('public/frontend/img/photo_grid/6.jpg')}}" alt="grid_image">
                    </div>
                </div>
                <div class="social_bottom">
                    <div class="social d_flex">
                        <a href="#"><i class="fab fa-tumblr"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <p class="on_top">on top</p>
                <p class="copyright">Copyright © 2009–2016 City Blog LLC.</p>
            </footer>
        </div>




        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script>
            // Toster message code
            @if (Session:: has('message'))
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


        </script>
        <script src="{{ asset('public/frontend/js/app.js')}}"></script>
    </body>

</li>