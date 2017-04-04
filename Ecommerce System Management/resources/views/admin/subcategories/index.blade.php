@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.error')
        <div class="col-md-8 col-md-offset-2">

            <form action="/subcategories" method="POST" role="form">
                {{ csrf_field() }}

                <legend>Creating a subcategory</legend>
                <input name="name" type="text" class="form-control" style="width: 150px; display: inline;" placeholder="Enter name">
                <input name="description" type="text" class="form-control" style="width: 300px; display: inline;" placeholder="Enter description">
                    <select name="category_id" data-placeholder="Choose a category..." class="chosen-select form-control"  tabindex="2" style="width: 170px; display: inline;">
                            <option value=""></option>
                            @foreach (\App\Category::all() as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                <br><br>
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
                    @foreach (\App\Subcategory::all() as $subcategory)
                    <tr>
                        <td>{{ $subcategory->id }}</td>
                        <td>{{ $subcategory->name }}</td>
                        <td>{{ $subcategory->description }}</td>
                        <td><form action="subcategories/{{ $subcategory->id }}" method="POST" role="form">
                            {{ csrf_field() }}
                            <input name="name" type="text" class="form-control" style="width: 100px; display: inline;" value="{{ $subcategory->name }}">
                            <input name="description" type="text" class="form-control" style="width: 100px; display: inline;" value="{{ $subcategory->description }}">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form></td>
                        <td><a href="/subcategories/delete/{{ $subcategory->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection




