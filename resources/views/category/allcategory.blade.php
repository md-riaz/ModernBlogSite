@extends('layouts.layout')
@section('siteTitle')
All Category
@endsection

@section('content')
<ul class="buttons d_flex">
    <li><a href="{{ route('add.category') }}"><button class="flat-btn">add category</button></a></li>
    <li><a href="{{ route('all.category') }}"><button class="flat-btn">all category</button></a></li>
    <li><a href="{{ route('write.post') }}"><button class="flat-btn">write post</button></a></li>
</ul>
<hr>

<table class="table">
    <thead>
        <th>SL</th>
        <th>Category Name</th>
        <th>Category Slug</th>
        <th>Created at</th>
        <th>Action</th>
    </thead>
    <tbody>
        @php
        $count = 1;
        @endphp
        @foreach ($categories as $category)
        <tr>
            <td>{{ $count++ }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->created_at }}</td>
            <td>
                <a href="{{ url('edit/category/'. $category->id) }}" class="btn">Edit</a>
                <a href="{{ url('view/category/'. $category->id) }}" class="btn">View</a>
                <a href="{{ url('delete/category/'. $category->id) }}" class="btn" id="delete">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection