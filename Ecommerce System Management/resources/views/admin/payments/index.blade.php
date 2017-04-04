@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/payments/create"><button type="button" class="btn btn-lg btn-info">Create a new payment</button></a><hr>
            
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
                @foreach (\App\Payment::all() as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->name }}</td>
                        <td><a href="/payments/edit/{{ $payment->id }}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                        <td><a href="/payments/delete/{{ $payment->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection
