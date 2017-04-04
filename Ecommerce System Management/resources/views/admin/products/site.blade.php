@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-4 col-md-3">
      <form action="/search" method="POST">
          {{ csrf_field() }}
        <div class="well">
          <div class="row">
            <div class="col-sm-12">
              <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Search products...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </div>
          </div>
        </div>
      </form>

      <!-- Filter -->
      <form class="shop__filter" method="POST" action="/">
       {{ csrf_field() }}
        <!-- Price -->
        <h3 class="headline">
          <span>Price</span>
        </h3>
        <div class="radio">
          <input type="radio" name="shop-filter__price" id="shop-filter-price_1" value="" checked="">
          <label for="shop-filter-price_1">Under $25</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__price" id="shop-filter-price_2" value="">
          <label for="shop-filter-price_2">$25 to $50</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__price" id="shop-filter-price_3" value="">
          <label for="shop-filter-price_3">$50 to $100</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__price" id="shop-filter-price_4" value="specify">
          <label for="shop-filter-price_4">Other (specify)</label>
        </div>
        <div class="form-group shop-filter__price">
          <div class="row">
            <div class="col-xs-4">
              <label for="shop-filter-price_from" class="sr-only"></label>
              <input name="price_from" id="shop-filter-price_from" type="number" min="0" class="form-control" placeholder="From">
            </div>
            <div class="col-xs-4">
              <label for="shop-filter-price_to" class="sr-only"></label>
              <input name="price_to" id="shop-filter-price_to" type="number" min="0" class="form-control" placeholder="To">
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-block btn-default">Go</button>
            </div>
          </div>
        </div>

        <!-- Checkboxes -->
        <h3 class="headline">
          <span>Company</span>
        </h3>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_1" checked="">
          <label for="shop-filter-checkbox_1">Adidas</label>
        </div>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_2">
          <label for="shop-filter-checkbox_2">Calvin Klein</label>
        </div>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_3">
          <label for="shop-filter-checkbox_3">Columbia</label>
        </div>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_4">
          <label for="shop-filter-checkbox_4">Tommy Hilfiger</label>
        </div>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_5">
          <label for="shop-filter-checkbox_5">Not specified</label>
        </div>

      </form>
    </div>
    
    <div class="col-sm-8 col-md-9">
      <!-- Filters -->
      <ul class="shop__sorting">
        <li class="active"><a href="#">Popular</a></li>
        <li><a href="#">Newest</a></li>
        <li><a href="#">Bestselling</a></li>
        <li><a href="#">Price (low)</a></li>
        <li><a href="#">Price (high)</a></li>
      </ul>

      <div class="row">
      @foreach ($products as $product)
        <div class="col-sm-6 col-md-4">
          <div class="shop__thumb">
            <a href="/products/{{ $product->id }}">
              <div class="shop-thumb__img">
                <img src="/images/{{ $product->productimage->name }}" class="img-responsive" alt="...">
              </div>
              <h5 class="shop-thumb__title">
                {{ $product->name }}
              </h5>
              <div class="shop-thumb__price">
                <span class="shop-thumb-price_old">$80.99</span>
                <span class="shop-thumb-price_new">${{ $product->price }}</span>
              </div>
            </a>
          </div>
        </div>  
      @endforeach  
      </div> <!-- / .row -->

      <!-- Pagination -->
      <div class="row">
        <div class="col-sm-12">

          <ul class="pagination pull-right">
            <li class="disabled"><a href="#">«</a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">»</a></li>
          </ul>
          
        </div>
      </div> <!-- / .row -->
      
    </div> <!-- / .col-sm-8 -->
  </div> <!-- / .row -->
</div>

  @endsection
