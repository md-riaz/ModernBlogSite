@extends('layouts.layout')
@section('siteTitle')
View All Category
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
        <th>ID</th>
        <th>Category Name</th>
        <th>Category Slug</th>
        <th>Created at</th>
        <th>Updated at</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->created_at }}</td>
            <td>{{ $category->updated_at }}</td>
        </tr>
    </tbody>
</table>
@endsection