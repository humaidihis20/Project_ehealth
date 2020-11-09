<?php

namespace App\Http\Controllers;

use App\Models\nutrisiMakanan;
use Illuminate\Http\Request;

class NutrisiMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nutrisiMakanan()
    {
        return view('info.nutrisi_makanan');
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
     * @param  \App\Models\nutrisiMakanan  $nutrisiMakanan
     * @return \Illuminate\Http\Response
     */
    public function show(nutrisiMakanan $nutrisiMakanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nutrisiMakanan  $nutrisiMakanan
     * @return \Illuminate\Http\Response
     */
    public function edit(nutrisiMakanan $nutrisiMakanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nutrisiMakanan  $nutrisiMakanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nutrisiMakanan $nutrisiMakanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nutrisiMakanan  $nutrisiMakanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(nutrisiMakanan $nutrisiMakanan)
    {
        //
    }
}
