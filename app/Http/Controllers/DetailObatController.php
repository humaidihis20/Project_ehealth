<?php

namespace App\Http\Controllers;

use App\Models\detailObat;
use Illuminate\Http\Request;

class DetailObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info-obat.detail_obat');
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
     * @param  \App\Models\detailObat  $detailObat
     * @return \Illuminate\Http\Response
     */
    public function show(detailObat $detailObat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detailObat  $detailObat
     * @return \Illuminate\Http\Response
     */
    public function edit(detailObat $detailObat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailObat  $detailObat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailObat $detailObat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailObat  $detailObat
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailObat $detailObat)
    {
        //
    }
}
