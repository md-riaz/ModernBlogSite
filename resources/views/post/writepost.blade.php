@extends('layouts.layout')
@section('siteTitle')
Write Post
@endsection

@section('content')
<ul class="buttons d_flex">
    <li><a href="{{ route('add.category') }}"><button class="flat-btn">add category</button></a></li>
    <li><a href="{{ route('all.category') }}"><button class="flat-btn">all category</button></a></li>
    <li><a href="{{ route('write.post') }}"><button class="flat-btn">write post</button></a></li>
</ul>
<hr>
<div class="container">
    <div class="write-post">
        <div class="post-comments">
            <h2 class="comments-title">Write a new post here.</h2>
            <div class="comment-respond">
                <form action="#" method="post">
                    @csrf
                    <div class="d_flex comment-double">
                        <div class="input-field">
                            <input type="text" name="title" placeholder="Post Title *" aria-required="true" required />
                        </div>
                        <div class="input-field">
                            <select name="category_id">
                                <option value="" disabled selected>Select a Category</option>
                                <option value="">Beauty</option>
                                <option value="">Health</option>
                                <option value="">Lifestyle</option>
                                <option value="">Music</option>
                                <option value="">Sport</option>
                                <option value="">Yoga</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field">
                        <input type="file" name="postImg">
                    </div>
                    <div class="input-field">
                        <textarea name="details" placeholder="Post Details *" aria-required="true" required></textarea>
                    </div>
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