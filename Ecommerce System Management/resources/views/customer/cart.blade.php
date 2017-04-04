@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @include('layouts.error')
        <div class="col-md-8 col-md-offset-2">


            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Ordered at</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php $total = 0; ?>
                    @foreach (Auth::user()->cart->orderedproducts as $orderedproduct)
                    <tr>
                        <td>{{ $orderedproduct->id }}</td>
                        <td>{{ $orderedproduct->product->name }}</td>
                        <td>{{ $orderedproduct->product->price }}</td>
                        <td><form action="orderedproducts/edit/{{ $orderedproduct->id }}" method="POST" role="form">
                            {{ csrf_field() }}
                            <input name="quantity" type="text" class="form-control" style="width: 100px; display: inline;" value="{{ $orderedproduct->quantity }}">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form></td> 
                        <td>{{ ($orderedproduct->product->price * $orderedproduct->quantity) }}</td>             
                        <td>{{ $orderedproduct->created_at }}</td>
                        <td><a href="/orderedproducts/delete/{{ $orderedproduct->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                        <?php $total = $total + ($orderedproduct->product->price * $orderedproduct->quantity);  ?>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <br>

            <div class="well">
                <h3>Total to pay : <?php echo $total; ?>$ </h3>
            </div>



        </div>
    </div>
</div>
@endsection




