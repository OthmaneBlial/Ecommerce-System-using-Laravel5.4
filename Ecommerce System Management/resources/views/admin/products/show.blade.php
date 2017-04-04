@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
@include('layouts.message')
    <div class="col-sm-12 col-md-12 col-lg-12">
      <!-- product -->
      <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
          <div class="col-md-5 col-sm-12 col-xs-12 ">
            <div class="product-image"> 
              <div id="myCarousel-2" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
                  <li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="item active">
                    <img src="/images/{{ $product->productimage->name }}">
                  </div>
                  <!-- Slide 2 -->
                  <div class="item">
                    <img src="/images/{{ $product->productimage->name }}">
                  </div>
                  <!-- Slide 3 -->
                  <div class="item">
                    <img src="/images/{{ $product->productimage->name }}">
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="fa fa-chevron-left"></span> </a>
                <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="fa fa-chevron-right"></span> </a>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-12 col-xs-12">

            <h2 class="name">
              {{ $product->name }} 
              <small>Product by <a href="javascript:void(0);">{{ $product->company->name }}</a></small>
            </h2>
            <hr>
            <h3 class="price-container">
              ${{ $product->price }} 
              <small>*includes tax</small>
            </h3>
            <div class="certified">
              <ul>
                <li><a href="javascript:void(0);">Delivery time<span>7 Working Days</span></a></li>
                <li><a href="javascript:void(0);">Certified<span>Quality Assured</span></a></li>
              </ul>
            </div>
            <hr>
            <div class="description description-tabs">
              <ul id="myTab" class="nav nav-pills">
                <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Product Description </a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="more-information">
                  <br>
                  <strong>Description Title</strong>
                  <p>Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec. </p>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6">
                <form action="/orderedproducts/create" method="POST" role="form">  
                {{ csrf_field() }}
                <input type="hidden" name="product_id" id="inputProduct_id" class="form-control" value="{{ $product->id }}">
                Quantity: <input type="text" name="quantity" class="form-control" style="width: 50px; display: inline;" >
                  <button type="submit" class="btn btn-primary" style="width: 150px; display: inline;">Add to cart (${{ $product->price }})</button>
                </form>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="btn-group pull-right">
                  <button class="btn btn-white btn-default"><i class="fa fa-star"></i> Add to wishlist </button>
                  <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i> Contact Seller</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end product -->
      </di


    </div>
  </div>
  @endsection



  
