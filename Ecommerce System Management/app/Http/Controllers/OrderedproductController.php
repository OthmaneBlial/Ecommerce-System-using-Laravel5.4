<?php

namespace App\Http\Controllers;

use App\Orderedproduct;
use Illuminate\Http\Request;
use Auth;
use Validator;

class OrderedproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.orderedproducts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orderedproducts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {



        $orderedproduct = new Orderedproduct();

        $orderedproduct->quantity = request('quantity');
        $orderedproduct->product_id = request('product_id');
        $orderedproduct->user_id = Auth::user()->id;
        $orderedproduct->cart_id = Auth::user()->cart->id;
        $orderedproduct->save();


        return redirect('/products/'.request('product_id'))->with('flash_message','Added to cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orderedproduct  $orderedproduct
     * @return \Illuminate\Http\Response
     */
    public function show(Orderedproduct $orderedproduct)
    {
        return view('admin.orderedproducts.show', compact('orderedproduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orderedproduct  $orderedproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderedproduct $orderedproduct)
    {
        return view('admin.orderedproducts.edit', compact('orderedproduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orderedproduct  $orderedproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Orderedproduct $orderedproduct)
    {


        $input = request()->all();

        if ($orderedproduct->fill($input)->save())
            return redirect('/cart');

        return redirect('/cart')->withInput(request()->all())->withErrors("Unable to update this Orderedproduct");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orderedproduct  $orderedproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderedproduct $orderedproduct)
    {
        $orderedproduct->delete();

        return redirect('/cart');

    }

}
