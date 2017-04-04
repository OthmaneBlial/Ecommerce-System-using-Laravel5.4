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

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Your profile</h3>
            </div>
            <div class="panel-body">
                <h3>Name: {{ Auth::user()->name }}</h3>
                <h3>Username: {{ Auth::user()->username }}</h3>
                <h3>Email: {{ Auth::user()->email }}</h3>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection

