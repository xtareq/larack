@extends('xdmin.layouts.app')
@section('content')
<div class="container">
<div class="card card-block">
    <div class="card-header">
        <strong class="card-title">Posts List</strong>
    </div>
    <div class="card-body">
    <a href="{{route('xdmin.posts.create')}}" class="btn btn-success float-right">+ New Post</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
            <tr>
                <td scope="column">Sujon khan</td>
                <td>adfadsf</td>
                <td>dafda</td>
                <td></td>
            </tr>
            @empty
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                <strong>No Post Found!</strong>
            @endforelse

        </tbody>
    </table>
    </div>
</div>    
</div>

@endsection

