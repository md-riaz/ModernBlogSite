@extends('layouts.layout')
@section('siteTitle')
Admin Panel
@endsection

@section('content')
<ul class="buttons d_flex">
    <li><a href="{{ URL::to('category') }}"><button class="flat-btn">all category</button></a></li>
    <li><a href="{{ URL::to('category/create') }}"><button class="flat-btn">add category</button></a></li>
    <li><a href="{{ URL::to('post') }}"><button class="flat-btn">all posts</button></a></li>
    <li><a href="{{ URL::to('post/create') }}"><button class="flat-btn">write post</button></a></li>
</ul>
<hr>
@endsection