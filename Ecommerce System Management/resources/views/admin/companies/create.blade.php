@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('layouts.error')
        <div class="col-md-8 col-md-offset-2">
            

        <form action="/companies" method="POST" role="form">
            {{ csrf_field() }}

            <legend>Creating a company</legend>
        
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Enter name">
            </div>

            
           
            <button type="submit" class="btn btn-primary">Create a company</button>
        </form>

        </div>
    </div>
</div>
@endsection
