@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
    <div class="panel-heading">
    <a href="/products/create"><button  type="button" class="btn btn-success btn-lg ">ADD A NEW PRODUCT</button></a>
    </div>

        <div class="container">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h2>LIST OF PRODUCTS</h2>
            </div>
            <div class="panel-body">
               <table id="table" class="table-striped table-hover">
                  <thead>
                  <th>name</th>
                  <th>price</th>
                  <th>stock</th>
                  <th>subcategory</th>
                  <th>company</th>
                  <th>show</th>
                  <th>edit</th>
                  <th>delete</th>
                  </thead>
                  <tbody>
                  @foreach(\App\Product::all() as $product)
                  <tr>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->stock }}</td>
                  <td>{{ $product->subcategory->name }}</td>
                  <td>{{ $product->company->name }}</td>
                  <td><a href="/products/{{ $product->id }}"><button type="button" class="btn btn-success">SHOW</button></a></td>
                  <td><a href="/products/edit/{{ $product->id }}"><button type="button" class="btn btn-info">EDIT</button></a></td>
                  <td><a href="/products/delete/{{ $product->id }}"><button type="button" class="btn btn-danger">DELETE</button></a></td>
                  </tr>
                  @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>



    </div>
</div>
@endsection
