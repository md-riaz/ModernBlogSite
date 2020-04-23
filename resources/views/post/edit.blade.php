@extends('layouts.layout')
@section('siteTitle')
Edit Post
@endsection

@section('content')

<div class="container">
    <div class="write-post">
        <div class="post-comments">
            <h2 class="comments-title">Edit an existing post.</h2>
            <div class="comment-respond">
                <form action="{{ url('post/'.$post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="d_flex comment-double">
                        <div class="input-field">
                            <input type="text" name="title" value="{{$post->title}}" aria-required="true" required />
                        </div>
                        <div class="input-field">
                            <select name="category_id">
                                <option value="" disabled selected>Select a Category</option>
                                @foreach ($categories as $item)
                                <option value="{{ $item->id }}" {{ $item->id==$post->category_id ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="input-field">
                        <input type="file" name="post_img">
                        <label for="">Current Image</label><br>
                        <img src="{{ asset('public/frontend/postimg/'.$post->post_img) }}" alt="" width="120">
                        <input type="hidden" name="old_img" value="{{$post->post_img}}">
                    </div>
                    <div class=" input-field">
                        <textarea name="details" rows="20" id="post_desc" style="height: auto;" aria-required="true" required>{{$post->details}}</textarea>
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
