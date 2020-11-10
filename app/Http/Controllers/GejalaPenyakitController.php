<?php

namespace App\Http\Controllers;

use App\Models\gejalaPenyakit;
use Illuminate\Http\Request;

class GejalaPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info-penyakit.gejala_penyakit');
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
     * @param  \App\Models\gejalaPenyakit  $gejalaPenyakit
     * @return \Illuminate\Http\Response
     */
    public function show(gejalaPenyakit $gejalaPenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gejalaPenyakit  $gejalaPenyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(gejalaPenyakit $gejalaPenyakit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gejalaPenyakit  $gejalaPenyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gejalaPenyakit $gejalaPenyakit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gejalaPenyakit  $gejalaPenyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(gejalaPenyakit $gejalaPenyakit)
    {
        //
    }
}
