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
        <th>Author</th>
        <th>Category</th>
        <th>Image</th>
        <th>Action</th>
    </thead>
    {{$posts}}
    <tbody>
        @foreach ($posts as $row)
        <tr>
            <td>{{ $posts->firstItem() + $loop->index }}</td>
            <td> {{substr($row->title,0, 24) }}...</td>
            <td>{{ $row->user->name }}</td>
            <td>{{ $row->category->name }}</td>
            <td><img src="{{$row->post_img}}" alt="" width="80" height="50"></td>
            <td>
                <a href="{{ url('post/'. $row->id.'/edit') }}" class="btn table-primary"><i class="far fa-edit"></i></a>
                <a href="{{ url('post/'. $row->id) }}" class="btn text-secondary"><i class="far fa-eye"></i></a>

                <form action="" id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn text-danger" id="delete"
                        data-action="{{ url('post/'. $row->id) }}"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    {{$posts->links()}}
</table>
@endsection