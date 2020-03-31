@extends('layouts.layout')
@section('siteTitle')
Write Post
@endsection

@section('content')
<ul class="buttons d_flex">
    <li><a href="{{ URL::to('category') }}"><button class="flat-btn">all category</button></a></li>
    <li><a href="{{ URL::to('category/create') }}"><button class="flat-btn">add category</button></a></li>
    <li><a href="{{ URL::to('post') }}"><button class="flat-btn">all posts</button></a></li>
    <li><a href="{{ URL::to('post/create') }}"><button class="flat-btn">write post</button></a></li>
</ul>
<hr>
<div class="container">
    <div class="write-post">
        <div class="post-comments">
            <h2 class="comments-title">Write a new post here.</h2>
            <div class="comment-respond">
                <form action="{{ url('post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="d_flex comment-double">
                        <div class="input-field">
                            <input type="text" name="title" placeholder="Post Title *" aria-required="true" required />
                        </div>
                        <div class="input-field">
                            <select name="category_id">
                                <option value="" disabled selected>Select a Category</option>
                                @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="input-field">
                        <input type="file" name="post_img">
                    </div>
                    <div class="input-field">
                        <textarea name="details" placeholder="Post Details *" aria-required="true" required></textarea>
                    </div>
                    {{-- Displaying The Validation Errors --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {{-- Displaying The Validation Errors --}}
                    <p class="form-submit">
                        <input name="submit" type="submit" class="submit" value="Submit your post" required />
                    </p>
                </form>
            </div>
            <!-- #respond -->
        </div>
    </div>
</div>
@endsection