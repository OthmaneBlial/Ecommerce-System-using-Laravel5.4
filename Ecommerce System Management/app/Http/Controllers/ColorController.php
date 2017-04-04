<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;
use Validator;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.colors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validator = Validator::make(request()->all(), Color::$validationRules);

        if ($validator->fails())
            return redirect('/colors')->withInput(request()->all())->withErrors($validator);

        Color::create(request()->all());

        return redirect('/colors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        return view('admin.colors.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        return view('admin.colors.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Color $color)
    {
        $validator = Validator::make(request()->all(), Color::$validationRules);

        if ($validator->fails())
            return redirect('/colors')->withInput(request()->all())->withErrors($validator);

        $input = request()->all();

        if ($color->fill($input)->save())
            return redirect('/colors');

        return redirect('colors')->withInput(request()->all())->withErrors("Unable to update this Color");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        $color->delete();

        return redirect('/colors');

    }

}
