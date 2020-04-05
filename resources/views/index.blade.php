@extends('layouts.layout')
@section('siteTitle')
Home
@endsection


@section('FeaturePost')
<!--   Feature Post Section -->
<section class="feature-posts">
    <div class="feature-posts_wrapper d_flex feature-post-slider owl-carousel owl-theme">


        @foreach (App\Post::take(9)->latest('updated_at')->get() as $item)

        <div class="feature-post d_flex item owl-lazy" data-src="{{ $item->post_img}}">
            <span class="overlay"></span>
            <div class="feature-post_content d_flex">
                <div class="categories d_flex">
                    <a href="{{url('/categories/'.$item->category->slug)}}">{{ $item->category->name}}</a>

                </div>
                <a class="title">
                    {{ $item->title}}
                </a>
                <div class="post_bottom d_flex">
                    <p class="date">{{$item->updated_at->format('d F, Y')}}</p>
                    <div class="comments d_flex">
                        <i class="fas fa-comment"></i>
                        <p>24</p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>
    <div class="btn-prev"></div>
    <div class="btn-next"></div>
</section>
@endsection
@section('content')
<!--   Main Post Section -->
<section class="post-list">
    @forelse ($posts as $post)
    <div class="posts">
        <div class="posts_contents_wrapper d_flex">
            <div class="posts_preview_img">
                <img src="{{ $post->post_img}}" alt="preview_img">
            </div>
            <div class="posts_desc d_flex">
                <div class="posts_title">
                    <div class="categories d_flex">
                        <a href="{{url('/')}}?category={{$post->category->slug}}">{{$post->category->name}}</a>
                    </div>
                    <a class="title" href="{{ url('post/'. $post->id) }}">
                        {{$post->title}}
                    </a>
                    <div class="info d_flex">
                        <p class="date">{{$post->created_at->format('d F, Y')}}</p>
                        <p class="author">by <a href="#">{{$post->user->name}}</a></p>
                    </div>
                </div>
                <p class="text_contents">
                    {!!substr($post->details,0,200)!!}...
                    <br>
                    <a class="read_more" href="{{ url('post/'. $post->id) }}">...</a>
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
    @empty
    <p class="text-center">No articles to show</p>
    @endforelse

    @if ($posts instanceof \Illuminate\Pagination\LengthAwarePaginator))
    <nav class="pagination">
        <div class="page-links">
            <a class="prev page-numbers {{$posts->previousPageUrl()==null ? 'd-none' : ''}}"
                href="{{$posts->previousPageUrl()}}">previews</a>

            @for ($i = 1; $i < $posts->lastPage()+1; $i++)
                <a class="page-numbers {{$posts->currentPage() == $i ? 'current' : '' }}"
                    href=" {{$posts->url($i)}}">{{$i}}</a>
                @endfor

                <a class="next page-numbers" {{$posts->previousPageUrl()==null ? 'd-none' : ''}}
                    href="{{$posts->nextPageUrl()}}">next</a>
        </div>

    </nav>
    @endif


</section>
@endsection