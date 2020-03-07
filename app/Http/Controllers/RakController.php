<?php

namespace App\Http\Controllers;

use App\Rak;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use DB;
use Validator;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rak = DB::table('raks')->get();
        return view('admin.rak.index',compact('rak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'no_rak' => 'required|integer',
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:50',
            'status' => 'nullable|string'
        ]);
        
        $r = new Rak;
        $r->no_rak = $request->input('no_rak');
        $r->name = $request->input('name');
        $r->description = $request->input('description');
        $r->status = $request->input('status');
        $r->save();
        // dd($r);
        return redirect()->route('rak.index')->with(['success'=>'Rak :'. $request->name . 'Ditambahkan']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function show(Rak $rak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raks = Rak::find($id);
        return view('admin.rak.edit', compact('raks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $raks = Rak::find($id);
        $raks->no_rak = $request->input('no_rak');
        $raks->name = $request->input('name');
        $raks->description = $request->input('description');
        $raks->status = $request->input('status');
        $raks->save();
        // dd($raks);
        return redirect()->route('rak.index')->with(['success'=>'Rak:'. $raks->name .'Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $raks = Rak::find($id);
        $raks->delete();
        return redirect()->route('rak.index')->with(['success'=>'Rak'. $raks->name . 'DiHapus']);

    }
}
