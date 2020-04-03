@extends('layouts.layout')
@section('siteTitle')
Edit Category
@endsection

@section('content')
<ul class="buttons d_flex justify-content-center">
    <li><a href="{{ URL::to('category') }}"><button class="flat-btn">all category</button></a></li>
    <li><a href="{{ URL::to('category/create') }}"><button class="flat-btn">add category</button></a></li>
    <li><a href="{{ URL::to('post') }}"><button class="flat-btn">all posts</button></a></li>
    <li><a href="{{ URL::to('post/create') }}"><button class="flat-btn">write post</button></a></li>
</ul>
<hr>
<div class="container">
    <div class="write-post">
        <div class="post-comments">
            <h2 class="comments-title">Edit an existing category.</h2>
            <div class="comment-respond">
                <form action="{{ url('category/'.$category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="d_flex comment-double">
                        <div class="input-field">
                            <label for="">Category Name</label>
                            <input type="text" name="name" value="{{ $category->name }}" aria-required="true" />
                        </div>
                        <div class="input-field">
                            <label for="">Category Slug</label>
                            <input type="text" name="slug" value="{{ $category->slug }}" aria-required="true" />
                        </div>
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
                        <input name="submit" type="submit" class="submit" value="Update Category" required />
                    </p>
                </form>
            </div>
            <!-- #respond -->
        </div>
    </div>
</div>
@endsection