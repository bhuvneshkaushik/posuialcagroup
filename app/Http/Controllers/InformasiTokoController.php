<?php

namespace App\Http\Controllers;

use App\InformasiToko;
use Illuminate\Http\Request;

class InformasiTokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index part
        $informasi  = InformasiToko::all();
        return view('admin.informasiToko.index',\compact('informasi'));
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
     * @param  \App\InformasiToko  $informasiToko
     * @return \Illuminate\Http\Response
     */
    public function show(InformasiToko $informasiToko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InformasiToko  $informasiToko
     * @return \Illuminate\Http\Response
     */
    public function edit(InformasiToko $informasiToko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InformasiToko  $informasiToko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformasiToko $informasiToko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InformasiToko  $informasiToko
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformasiToko $informasiToko)
    {
        //
    }
}
