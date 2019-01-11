<?php

namespace App\Http\Controllers;

use App\Galleries;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Galleries::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galleries  $galleries
     * @return \Illuminate\Http\Response
     */
    public function show(Galleries $galleries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galleries  $galleries
     * @return \Illuminate\Http\Response
     */
    public function edit(Galleries $galleries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galleries  $galleries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galleries $galleries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galleries  $galleries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galleries $galleries)
    {
        //
    }
}
