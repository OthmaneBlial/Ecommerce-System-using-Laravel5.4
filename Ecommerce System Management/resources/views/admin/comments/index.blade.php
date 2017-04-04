@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/comments/create"><button type="button" class="btn btn-lg btn-info">Create a new comment</button></a><hr>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach (\App\Comment::all() as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->name }}</td>
                        <td><a href="/comments/edit/{{ $comment->id }}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                        <td><a href="/comments/delete/{{ $comment->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection
