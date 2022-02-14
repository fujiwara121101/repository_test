<?php

namespace App\Http\Controllers;

use App\Manner;
use Illuminate\Http\Request;

class MannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Manner $manner)
    {
        return view('manners/index')->with(['manners' => $manner->get()]); 
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
     * @param  \App\Manner  $manner
     * @return \Illuminate\Http\Response
     */
    public function show(Manner $manner)
    {
        return view('manners/show')->with(['manner' => $manner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manner  $manner
     * @return \Illuminate\Http\Response
     */
    public function edit(Manner $manner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manner  $manner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manner $manner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manner  $manner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manner $manner)
    {
        //
    }
}
