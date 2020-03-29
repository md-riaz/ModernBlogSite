@extends('layouts.layout')
@section('siteTitle')
Add Category
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
            <h2 class="comments-title">Add a new category here.</h2>
            <div class="comment-respond">
                <form action="{{ route('store.category') }}" method="post">
                    @csrf
                    <div class="d_flex comment-double">
                        <div class="input-field">
                            <input type="text" name="name" placeholder="Category Name *" aria-required="true" />
                        </div>
                        <div class="input-field">
                            <input type="text" name="slug" placeholder="Slug Name *" aria-required="true" required />
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
                        <input name="submit" type="submit" class="submit" value="Add Category" required />
                    </p>
                </form>
            </div>
            <!-- #respond -->
        </div>
    </div>
</div>
@endsection