@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @include('layouts.error')
        <div class="col-md-8 col-md-offset-2">

            <form action="/colors" method="POST" role="form">
                {{ csrf_field() }}

                <legend>Creating a color</legend>

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
                    @foreach (\App\Color::all() as $color)
                    <tr>
                        <td>{{ $color->id }}</td>
                        <td>{{ $color->name }}</td>
                        <td><form action="colors/{{ $color->id }}" method="POST" role="form">
                            {{ csrf_field() }}
                            <input name="name" type="text" class="form-control" style="width: 100px; display: inline;" value="{{ $color->name }}">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form></td>
                        <td><a href="/colors/delete/{{ $color->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection




