@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-3">

        <ul id="user_profile">
            <li><a href="/home">HOME</a></li>
            <li><a href="/profile">PROFILE</a></li>
            <li><a href="/cart">CART</a></li>
            <li><a href="/history">SHOPPING HISTORY</a></li>
        </ul>

        </div>

        <div class="col-md-9">


        <table class="table table-hover" id="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>When</th>
                </tr>
            </thead>
            <tbody>
            @foreach (\App\Orderedproduct::where('user_id', Auth::user()->id)->get() as $orderedproduct)
                <tr>
                    <td>{{  $orderedproduct->product->name }}</td>
                    <td>{{  $orderedproduct->quantity }}</td>
                    <td>{{  $orderedproduct->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        </div>
    </div>
</div>
@endsection

