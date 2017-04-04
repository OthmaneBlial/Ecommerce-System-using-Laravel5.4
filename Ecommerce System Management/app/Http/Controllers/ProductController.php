<?php

namespace App\Http\Controllers;

use App\Product;
use App\Productimage;
use Illuminate\Http\Request;
use Validator;
use Auth;

class ProductController extends Controller
{

    public function __construct()
    {

           $this->middleware('role:Admin')->except('site', 'show');              
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function site()
    {
        $products = Product::all();
        return view('admin.products.site', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //dd(request()->all());
        
        
        $validator = Validator::make(request()->all(), Product::$validationRules);

        if ($validator->fails())
            return redirect('products/create')->withInput(request()->all())->withErrors($validator);

        $product = Product::create(request()->all());

        foreach (request()->tags as $tag) {
            $product->tags()->attach($tag);

        }

        foreach (request()->colors as $color) {
            $product->colors()->attach($color);

        }
        foreach (request()->sizes as $size) {
            $product->sizes()->attach($size);

        }

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $productimage = new Productimage();
        $productimage->name = $imageName;
        $productimage->product_id = $product->id;
        $productimage->save();

        return redirect('/products'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product)
    {
        $validator = Validator::make(request()->all(), Product::$validationRules);

        if ($validator->fails())
            return redirect('/admin/products/edit/'.$product->id)->withInput(request()->all())->withErrors($validator);

        $input = request(['','','']);

        if ($product->fill($input)->save())
            return redirect('admin/products');

        return redirect('/admin/products/edit/'.$product->id)->withInput(request()->all())->withErrors("Unable to update this Product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('admin/products');

    }

    public function search() {

        $keyword = request('search');

        $products = Product::ByFilter($keyword)->get();


        return view('admin.products.site', compact('products'));
    }

    public function filtering() {

        $price_from = request('price_from');
        $price_to = request('price_to');

        if ($price_from != '' && $price_to != '' ) {

            $products = Product::ByPrice($price_from, $price_to)->get();

            return view('admin.products.site', compact('products'));

        }

        else return redirect('/');

        


    }



}
