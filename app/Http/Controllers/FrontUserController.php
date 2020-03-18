<?php

namespace App\Http\Controllers;

use App\FrontUser;
use Illuminate\Http\Request;

class FrontUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontuser.masterUser');
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
     * @param  \App\FrontUser  $frontUser
     * @return \Illuminate\Http\Response
     */
    public function show(FrontUser $frontUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FrontUser  $frontUser
     * @return \Illuminate\Http\Response
     */
    public function edit(FrontUser $frontUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FrontUser  $frontUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontUser $frontUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FrontUser  $frontUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontUser $frontUser)
    {
        //
    }
}
