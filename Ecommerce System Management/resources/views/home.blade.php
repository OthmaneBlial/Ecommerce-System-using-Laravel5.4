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

        	<div class="jumbotron">
        		<div class="container">
        			<h1>HELLO DEAR CUSTOMER {{ Auth::user()->name }}</h1>
        			<p>
        				<a  href="/" class="btn btn-primary btn-lg">VISIT THE ECOMMERCE SITE</a>
        			</p>
        		</div>
        	</div>

        </div>
    </div>
</div>
@endsection

