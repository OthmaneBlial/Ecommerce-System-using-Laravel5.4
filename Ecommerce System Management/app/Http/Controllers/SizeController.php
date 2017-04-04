<?php

namespace App\Http\Controllers;

use App\Size;
use Illuminate\Http\Request;
use Validator;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sizes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validator = Validator::make(request()->all(), Size::$validationRules);

        if ($validator->fails())
            return redirect('/sizes')->withInput(request()->all())->withErrors($validator);

        Size::create(request()->all());

        return redirect('/sizes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        return view('admin.sizes.show', compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        return view('admin.sizes.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Size $size)
    {
        $validator = Validator::make(request()->all(), Size::$validationRules);

        if ($validator->fails())
            return redirect('/sizes')->withInput(request()->all())->withErrors($validator);

        $input = request()->all();

        if ($size->fill($input)->save())
            return redirect('/sizes');

        return redirect('/sizes')->withInput(request()->all())->withErrors("Unable to update this Size");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size->delete();

        return redirect('/sizes');

    }

}
