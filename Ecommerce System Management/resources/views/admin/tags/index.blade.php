@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @include('layouts.error')
        <div class="col-md-8 col-md-offset-2">

            <form action="/tags" method="POST" role="form">
                {{ csrf_field() }}

                <legend>Creating a tag</legend>

                <input name="name" type="text" class="form-control" style="width: 250px; display: inline;" placeholder="Enter name">
                <button type="submit" class="btn btn-success">ADD</button>
            </form>            

            <br><br>

            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (\App\Tag::all() as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td><form action="tags/{{ $tag->id }}" method="POST" role="form">
                            {{ csrf_field() }}
                            <input name="name" type="text" class="form-control" style="width: 100px; display: inline;" value="{{ $tag->name }}">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form></td>
                        <td><a href="/tags/delete/{{ $tag->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection




