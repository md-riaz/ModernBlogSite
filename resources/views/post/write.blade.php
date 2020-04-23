@extends('layouts.layout')
@section('siteTitle')
Write Post
@endsection
@section('content')

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
                        <textarea name="details" rows="20" placeholder="Post Details *" aria-required="true" id="post_desc" style="height: auto;"></textarea>
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
