<?php

namespace App\Http\Controllers;

use App\Rak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            'no_rak' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:50',
            'status' => 'nullable|string'
        ]);
        try{
            $raks = Rak::firstOrCreate([
                'no_rak'=> $request->no_rak
            ],[
                'name' => $request->name],
                ['description' => $request->description],
                ['status' => $request->status]);
            return redirect()->route('rak.index')->with(['success' =>'Rak'. $raks->name . 'Ditambahkan']);
        } catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
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
    public function edit(Rak $rak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rak $rak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rak $rak)
    {
        //
    }
}
