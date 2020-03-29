@extends('layouts.layout')
@section('siteTitle')
Admin Panel
@endsection

@section('content')
<ul class="buttons d_flex">
    <li><a href="{{ route('add.category') }}"><button class="flat-btn">add category</button></a></li>
    <li><a href="{{ route('all.category') }}"><button class="flat-btn">all category</button></a></li>
    <li><a href="{{ route('write.post') }}"><button class="flat-btn">write post</button></a></li>
</ul>
<hr>
@endsection