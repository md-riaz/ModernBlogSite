@extends('layouts.layout')
@section('siteTitle')
All Posts
@endsection

@section('content')
<ul class="buttons d_flex">
    <li><a href="{{ URL::to('category') }}"><button class="flat-btn">all category</button></a></li>
    <li><a href="{{ URL::to('category/create') }}"><button class="flat-btn">add category</button></a></li>
    <li><a href="{{ URL::to('post') }}"><button class="flat-btn">all posts</button></a></li>
    <li><a href="{{ URL::to('post/create') }}"><button class="flat-btn">write post</button></a></li>
</ul>
<hr>

<table class="table">
    <thead>
        <th>SL</th>
        <th>Post Title</th>
        <th>Category</th>
        <th>Image</th>
        <th>Action</th>
    </thead>
    <tbody>
        @php
        $count = 1;
        @endphp
        @foreach ($posts as $row)
        <tr>
            <td>{{ $count++ }}</td>
            <td> {{substr($row->title,0, 24) }}...</td>
            <td>{{ $row->category_id }}</td>
            <td><img src="{{ asset('public/frontend/postimg/'.$row->post_img) }}" alt="" width="80" height="50"></td>
            <td>
                <a href="{{ url('post/'. $row->id.'/edit') }}" class="btn">Edit</a>
                <a href="{{ url('post/'. $row->id) }}" class="btn">View</a>

                <form action="" id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" id="delete"
                        data-action="{{ url('post/'. $row->id) }}">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection