@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('layouts.error')
        <div class="col-md-8 col-md-offset-2">
            

        <form action="/payments" method="POST" role="form">
            {{ csrf_field() }}

            <legend>Creating a payment</legend>
        
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Enter name">
            </div>

            
           
            <button type="submit" class="btn btn-primary">Create a payment</button>
        </form>

        </div>
    </div>
</div>
@endsection
