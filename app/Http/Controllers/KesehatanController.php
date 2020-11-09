<?php

namespace App\Http\Controllers;

use App\Models\InfoKesehatan;
use Illuminate\Http\Request;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info.info_hidup_sehat');
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
     * @param  \App\Models\InfoKesehatan  $infoKesehatan
     * @return \Illuminate\Http\Response
     */
    public function show(InfoKesehatan $infoKesehatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoKesehatan  $infoKesehatan
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoKesehatan $infoKesehatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfoKesehatan  $infoKesehatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoKesehatan $infoKesehatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoKesehatan  $infoKesehatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoKesehatan $infoKesehatan)
    {
        //
    }
}
