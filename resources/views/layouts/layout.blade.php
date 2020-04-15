<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('siteTitle')</title>
    <link rel="shortcut icon" href="{{ asset('public/frontend/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('public/frontend/favicon.ico')}}" type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/toastr.css') }}" rel="stylesheet">
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
                                    </ul>
                                </li>
                                <li><a href="#">posttypes</a></li>

                                <li class="multi-nav"><a href="#">categories</a>
                                    <ul class="sub-menu">
                                        @foreach (App\Category::all() as $category)
                                        <li class="menu-item"><a
                                                href="{{url('/categories/'.$category->slug)}}">{{ $category->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">contact</a></li>
                                @if (Route::has('login'))
                                @auth
                                <li class="multi-nav">
                                    <a href="javascript:void;">Admin</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ URL::to('users') }}">all users</a></li>
                                        <li><a href="{{ URL::to('category') }}">all category</a></li>
                                        <li><a href="{{ URL::to('post') }}">all posts</a></li>
                                        <li><a href="{{ URL::to('category/create') }}">add category</a></li>
                                        <li><a href="{{ URL::to('post/create') }}">write post</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">register</a>
                                </li>
                                @endauth
                                @endif

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
                <a href="{{ URL::to('/') }}">Riaz Blog</a>
            </div>
        </header>
        <!--   Header Section End -->

        <main id="main-content">
            @yield('FeaturePost')

            <section class="Contents">
                <div class="container d_flex">
                    <div class="innerContainer">

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
                                <p class="texts">Hi! My name is
                                    <b>MD Riaz</b>. This is my blog site. It is based on laravel framework. </p>
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
                            <h3 class="bottom_bar">follow@md_riaz___</h3>
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
                                @foreach (App\Category::all() as $category)
                                <li class="menu-item"><a
                                        href="{{url('/categories/'.$category->slug)}}">{{ $category->name }}</a>
                                    <span></span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="latest_posts">
                            <h3 class="bottom_bar">recent posts</h3>

                            <div class="latest_post_wrapper">
                                @foreach (App\Post::take(5)->latest('created_at')->get() as $item)
                                <div class="latest_post d_flex">
                                    <div class="latest_post_preview_img">
                                        <img src="{{ asset($item->post_img)}}" alt="preview_img">
                                    </div>
                                    <div class="posts_desc">
                                        <p class="date">{{ $item->created_at->format('d F, Y')}}</p>
                                        <a href="">
                                            <h3 class="title">{{ $item->title}}</h3>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

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
                                @foreach (App\Tag::take(10)->latest('created_at')->get() as $tag)
                                <li><a href="{{url('/')}}?tag={{$tag->name}}">{{$tag->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </section>

                </div>
            </section>
        </main>


        <footer id="main-footer">
            <div class="follow_insta">
                <h3 class="title">follow@md_riaz___</h3>
                <a class="follow" href="https://www.instagram.com/md_riaz___/"><i class="fab fa-instagram"></i>instagram
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
            <p class="copyright">Copyright © 2009–2016 MD Riaz LLC.</p>
        </footer>
    </div>



    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('public/js/app.js') }}"></script>


    <script>
        // Toastr Notification
        @if(Session::has('message'))
          var type = "{{ Session::get('alert-type', 'info') }}";
          switch(type){
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


</body>

</html>