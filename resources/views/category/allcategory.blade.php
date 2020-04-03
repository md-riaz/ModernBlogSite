@extends('layouts.layout')
@section('siteTitle')
All Category
@endsection

@section('content')
<ul class="buttons d_flex justify-content-center">
    <li><a href="{{ URL::to('category') }}"><button class="flat-btn">all category</button></a></li>
    <li><a href="{{ URL::to('category/create') }}"><button class="flat-btn">add category</button></a></li>
    <li><a href="{{ URL::to('post') }}"><button class="flat-btn">all posts</button></a></li>
    <li><a href="{{ URL::to('post/create') }}"><button class="flat-btn">write post</button></a></li>
</ul>
<hr>

<table class="table table-responsive">
    <thead>
        <th>SL</th>
        <th>Category Name</th>
        <th>Slug</th>
        <th>Author</th>
        <th>Created at</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($categories as $row)
        <tr>
            <td>{{ $categories->firstItem() + $loop->index }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->slug }}</td>
            <td>{{ $row->user->name }}</td>
            <td>{{ $row->created_at->format('dS F, Y') }}</td>
            <td>
                <a href="{{ url('category/'. $row->id.'/edit') }}" class="btn text-primary"><i
                        class="far fa-edit"></i></a>
                <a href="{{ url('category/'. $row->id) }}" class="btn text-secondary"><i class="far fa-eye"></i></a>

                <form action="" id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn text-danger" id="delete"
                        data-action="{{ url('category/'. $row->id) }}"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    {{$categories->links()}}
</table>
@endsection