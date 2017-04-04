@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @include('layouts.error')
        <div class="col-md-8 col-md-offset-2">

            <form action="/companies" method="POST" role="form">
                {{ csrf_field() }}

                <legend>Creating a company</legend>

                <input name="name" type="text" class="form-control" style="width: 250px; display: inline;" placeholder="Enter name">
                <input name="description" type="text" class="form-control" style="width: 250px; display: inline;" placeholder="Enter description">
                <button type="submit" class="btn btn-success">ADD</button>
            </form>            

            <br><br>

            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (\App\Company::all() as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->description }}</td>
                        <td><form action="companies/{{ $company->id }}" method="POST" role="form">
                            {{ csrf_field() }}
                            <input name="name" type="text" class="form-control" style="width: 100px; display: inline;" value="{{ $company->name }}">
                            <input name="description" type="text" class="form-control" style="width: 100px; display: inline;" value="{{ $company->description }}">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form></td>
                        <td><a href="/companies/delete/{{ $company->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection




