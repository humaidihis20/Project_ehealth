<?php

namespace App\Http\Controllers;

use App\Models\caraMengatasi;
use Illuminate\Http\Request;

class CaraMengatasiPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info-penyakit.cara_mengatasi');
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
     * @param  \App\Models\caraMengatasi  $caraMengatasi
     * @return \Illuminate\Http\Response
     */
    public function show(caraMengatasi $caraMengatasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\caraMengatasi  $caraMengatasi
     * @return \Illuminate\Http\Response
     */
    public function edit(caraMengatasi $caraMengatasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\caraMengatasi  $caraMengatasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, caraMengatasi $caraMengatasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\caraMengatasi  $caraMengatasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(caraMengatasi $caraMengatasi)
    {
        //
    }
}
