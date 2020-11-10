<?php

namespace App\Http\Controllers;

use App\Models\kesehatanTerbaru;
use Illuminate\Http\Request;

class KesehatanTerbaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info.info_kesehatan_terbaru');
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
     * @param  \App\Models\kesehatanTerbaru  $kesehatanTerbaru
     * @return \Illuminate\Http\Response
     */
    public function show(kesehatanTerbaru $kesehatanTerbaru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kesehatanTerbaru  $kesehatanTerbaru
     * @return \Illuminate\Http\Response
     */
    public function edit(kesehatanTerbaru $kesehatanTerbaru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kesehatanTerbaru  $kesehatanTerbaru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kesehatanTerbaru $kesehatanTerbaru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kesehatanTerbaru  $kesehatanTerbaru
     * @return \Illuminate\Http\Response
     */
    public function destroy(kesehatanTerbaru $kesehatanTerbaru)
    {
        //
    }
}
