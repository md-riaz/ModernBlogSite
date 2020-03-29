@extends('layouts.layout')
@section('siteTitle')
Home
@endsection


@section('FeaturePost')
<!--   Feature Post Section -->
<section class="feature-posts">
    <div class="feature-posts_wrapper d_flex feature-post-slider owl-carousel owl-theme">

        <div class="feature-post d_flex item owl-lazy"
            data-src="{{ asset('public/frontend/img/feature_posts/feature_post_1.jpg')}}">
            <span class="overlay"></span>
            <div class="feature-post_content d_flex">
                <div class="categories d_flex">
                    <a href="#">beauty</a>
                    <a href="#">health</a>
                    <a href="#">lifestyle</a>
                </div>
                <a class="title">
                    from grapefruit to lemons to oranges, citrus does you good!
                </a>
                <div class="post_bottom d_flex">
                    <p class="date">june 14,2015</p>
                    <div class="comments d_flex">
                        <i class="fas fa-comment"></i>
                        <p>24</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-post d_flex item owl-lazy"
            data-src="{{ asset('public/frontend/img/feature_posts/feature_post_2.jpg')}}">
            <span class="overlay"></span>
            <div class="feature-post_content d_flex">
                <div class="categories d_flex">
                    <a href="#">beauty</a>
                    <a href="#">health</a>
                    <a href="#">lifestyle</a>
                </div>
                <a class="title">
                    from grapefruit to lemons to oranges, citrus does you good!
                </a>
                <div class="post_bottom d_flex">
                    <p class="date">june 14,2015</p>
                    <div class="comments d_flex">
                        <i class="fas fa-comment"></i>
                        <p>24</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-post d_flex item owl-lazy"
            data-src="{{ asset('public/frontend/img/feature_posts/feature_post_3.jpg')}}">
            <span class="overlay"></span>
            <div class="feature-post_content d_flex">
                <div class="categories d_flex">
                    <a href="#">beauty</a>
                    <a href="#">health</a>
                    <a href="#">lifestyle</a>
                </div>
                <a class="title">
                    from grapefruit to lemons to oranges, citrus does you good!
                </a>
                <div class="post_bottom d_flex">
                    <p class="date">june 14,2015</p>
                    <div class="comments d_flex">
                        <i class="fas fa-comment"></i>
                        <p>24</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-prev"></div>
    <div class="btn-next"></div>
</section>
@endsection
@section('content')
<!--   Main Post Section -->
<section class="post-list">

    <div class="posts">
        <div class="posts_contents_wrapper d_flex">
            <div class="posts_preview_img">
                <img src="{{ asset('public/frontend/img/Post_preview/preview_1.jpg')}}" alt="preview_img">
            </div>
            <div class="posts_desc d_flex">
                <div class="posts_title">
                    <div class="categories d_flex">
                        <a href="#">art</a>
                        <a href="#">health</a>
                    </div>
                    <a class="title">
                        Barbecue Party Tips For A Truly Amazing Event
                    </a>
                    <div class="info d_flex">
                        <p class="date"> june 14, 2015</p>
                        <p class="author">by <a href="#">author doe</a></p>
                    </div>
                </div>
                <p class="text_contents">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit.
                    Cumque ullam sunt eligendi. Labore voluptatum aspernatur inventore tempora.
                    <br>
                    <a class="read_more" href="#">...</a>
                </p>

            </div>
        </div>
        <div class="post_buttons d_flex">
            <div class="comments d_flex">
                <i class="far fa-comment"></i>
                <p>24</p>
            </div>
            <div class="post_share">
                <span>Share</span>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>

    <div class="posts">
        <div class="posts_contents_wrapper d_flex">
            <div class="posts_preview_img">
                <img src="{{ asset('public/frontend/img/Post_preview/preview_2.jpg')}}" alt="preview_img">
            </div>
            <div class="posts_desc d_flex">
                <div class="posts_title">
                    <div class="categories d_flex">
                        <a href="#">art</a>
                    </div>
                    <a class="title">
                        The Principles Of Scientific
                        Cooking
                    </a>
                    <div class="info d_flex">
                        <p class="date"> june 14, 2015</p>
                        <p class="author">by <a href="#">author doe</a></p>
                    </div>
                </div>
                <p class="text_contents">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit.
                    Cumque ullam sunt eligendi. Labore voluptatum aspernatur inventore tempora.
                    <br>
                    <a class="read_more" href="#">...</a>
                </p>

            </div>
        </div>
        <div class="post_buttons d_flex">
            <div class="comments d_flex">
                <i class="far fa-comment"></i>
                <p>24</p>
            </div>
            <div class="post_share">
                <span>Share</span>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>

    <div class="posts">
        <div class="posts_contents_wrapper d_flex">
            <div class="posts_preview_img">
                <img src="{{ asset('public/frontend/img/Post_preview/preview_3.jpg')}}" alt="preview_img">
            </div>
            <div class="posts_desc d_flex">
                <div class="posts_title">
                    <div class="categories d_flex">
                        <a href="#">art</a>
                    </div>
                    <a class="title">
                        How To Meet That Special
                        Someone
                    </a>
                    <div class="info d_flex">
                        <p class="date"> june 14, 2015</p>
                        <p class="author">by <a href="#">author doe</a></p>
                    </div>
                </div>
                <p class="text_contents">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit.
                    Cumque ullam sunt eligendi. Labore voluptatum aspernatur inventore tempora.
                    <br>
                    <a class="read_more" href="#">...</a>
                </p>

            </div>
        </div>
        <div class="post_buttons d_flex">
            <div class="comments d_flex">
                <i class="far fa-comment"></i>
                <p>24</p>
            </div>
            <div class="post_share">
                <span>Share</span>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>

    <div class="posts">
        <div class="posts_contents_wrapper d_flex">
            <div class="posts_preview_img">
                <img src="{{ asset('public/frontend/img/Post_preview/preview_4.jpg')}}" alt="preview_img">
            </div>
            <div class="posts_desc d_flex">
                <div class="posts_title">
                    <div class="categories d_flex">
                        <a href="#">art</a>
                    </div>
                    <a class="title">
                        How To Meet That Special
                        Someone
                    </a>
                    <div class="info d_flex">
                        <p class="date"> june 14, 2015</p>
                        <p class="author">by <a href="#">author doe</a></p>
                    </div>
                </div>
                <p class="text_contents">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit.
                    Cumque ullam sunt eligendi. Labore voluptatum aspernatur inventore tempora
                    <br>
                    <a class="read_more" href="#">...</a>
                </p>

            </div>
        </div>
        <div class="post_buttons d_flex">
            <div class="comments d_flex">
                <i class="far fa-comment"></i>
                <p>24</p>
            </div>
            <div class="post_share">
                <span>Share</span>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>

    <div class="posts">
        <div class="posts_contents_wrapper d_flex">
            <div class="posts_preview_img">
                <img src="{{ asset('public/frontend/img/Post_preview/preview_5.jpg')}}" alt="preview_img">
            </div>
            <div class="posts_desc d_flex">
                <div class="posts_title">
                    <div class="categories d_flex">
                        <a href="#">art</a>
                        <a href="#">lifestyle</a>
                    </div>
                    <a class="title">
                        How To Meet That Special
                        Someone
                    </a>
                    <div class="info d_flex">
                        <p class="date"> june 14, 2015</p>
                        <p class="author">by <a href="#">author doe</a></p>
                    </div>
                </div>
                <p class="text_contents">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit.
                    Cumque ullam sunt eligendi. Labore voluptatum aspernatur inventore tempora.
                    <br>
                    <a class="read_more" href="#">...</a>
                </p>

            </div>
        </div>
        <div class="post_buttons d_flex">
            <div class="comments d_flex">
                <i class="far fa-comment"></i>
                <p>24</p>
            </div>
            <div class="post_share">
                <span>Share</span>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>

    <div class="posts">
        <div class="posts_contents_wrapper d_flex">
            <div class="posts_preview_img">
                <img src="{{ asset('public/frontend/img/Post_preview/preview_6.jpg')}}" alt="preview_img">
            </div>
            <div class="posts_desc d_flex">
                <div class="posts_title">
                    <div class="categories d_flex">
                        <a href="#">travel</a>
                    </div>
                    <a class="title">
                        How To Meet That Special
                        Someone
                    </a>
                    <div class="info d_flex">
                        <p class="date"> june 14, 2015</p>
                        <p class="author">by <a href="#">author doe</a></p>
                    </div>
                </div>
                <p class="text_contents">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit.
                    Cumque ullam sunt eligendi. Labore voluptatum aspernatur inventore tempora.
                    <br>
                    <a class="read_more" href="#">...</a>
                </p>

            </div>
        </div>
        <div class="post_buttons d_flex">
            <div class="comments d_flex">
                <i class="far fa-comment"></i>
                <p>24</p>
            </div>
            <div class="post_share">
                <span>Share</span>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>

    <div class="posts">
        <div class="posts_contents_wrapper d_flex">
            <div class="posts_preview_img">
                <img src="{{ asset('public/frontend/img/Post_preview/preview_7.jpg')}}" alt="preview_img">
            </div>
            <div class="posts_desc d_flex">
                <div class="posts_title">
                    <div class="categories d_flex">
                        <a href="#">art</a>
                    </div>
                    <a class="title">
                        How To Meet That Special
                        Someone
                    </a>
                    <div class="info d_flex">
                        <p class="date"> june 14, 2015</p>
                        <p class="author">by <a href="#">author doe</a></p>
                    </div>
                </div>
                <p class="text_contents">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit.
                    Cumque ullam sunt eligendi. Labore voluptatum aspernatur inventore tempora.
                    <br>
                    <a class="read_more" href="#">...</a>
                </p>

            </div>
        </div>
        <div class="post_buttons d_flex">
            <div class="comments d_flex">
                <i class="far fa-comment"></i>
                <p>24</p>
            </div>
            <div class="post_share">
                <span>Share</span>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>

    <nav class="pagination">
        <div class="page-links">
            <span class="page-numbers current">1</span>
            <a class="page-numbers" href="#/page/2/">2</a>
            <a class="next page-numbers" href="#/page/2/">next</a>
        </div>
    </nav>

</section>
@endsection