@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('layouts.error')
        <div class="col-md-8 col-md-offset-2">
            

        <form action="/tags" method="POST" role="form">
            {{ csrf_field() }}

            <legend>Creating a tag</legend>
        
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Enter name">

            
           
            <button type="submit" class="btn btn-primary">Create a tag</button>
        </form>

        </div>
    </div>
</div>
@endsection
