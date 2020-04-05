@extends('layouts.layout')
@section('siteTitle')
Admin Panel
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
        <th>User Name</th>
        <th>Email</th>
        <th>Created at</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $users->firstItem() + $loop->index }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('dS F, Y') }}</td>
            <td>
                <a href="{{ url('/'. $user->id.'/edit') }}" class="btn table-primary"><i class="far fa-edit"></i></a>
                <a href="{{ url('/'. $user->id) }}" class="btn text-secondary"><i class="far fa-eye"></i></a>

                <form action="" id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn text-danger" id="delete" data-action="{{ url('/'. $user->id) }}"><i
                            class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$users->links()}}
@endsection