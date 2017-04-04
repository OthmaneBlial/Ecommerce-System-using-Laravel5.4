@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.error')

        <div class="col-md-8 col-md-offset-2">
            

        <form action="/orderedproducts/{{ $orderedproduct->id }}" method="POST" role="form">
            {{ csrf_field() }}

            <legend>Editing a orderedproduct</legend>
        
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Enter Name" required="required" value="{{ $orderedproduct->name }}">
            </div>

           
            <button type="submit" class="btn btn-primary">Edit a orderedproduct</button>
        </form>

        </div>
    </div>
</div>
@endsection
