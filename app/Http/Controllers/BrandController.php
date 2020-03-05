<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = DB::table('brands')->get();
        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.brand.create');
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
        //validasi form
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'status' => 'nullable|string'
        ]);

        try{
            $brands = Brand::firstOrCreate([
                'name' => $request->name],
                ['status' => $request->status]);
                return redirect()->route('brand.index')->with(['success' => 'Brand' . $brands->name . 'Ditambahkan' ]);

        } catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $brands = Brand::findOrfail($id);
        return view('admin.brand.edit', compact('brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:50',
            'status' => 'nullable|string'
        ]);
        try{
            $brands = Brand::findOrFail($id);
            $brands->update([
                'name'  =>  $request->name,
                'status'=>  $request->status
            ]);
            return redirect(route('brand.index'))->with(['success' => 'Brand:' . $brands->name . 'DiUbah']);
        } catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::findOrfail($id);
        $brands->delete();
        return redirect(route('brand.index'))->with(['success' => 'Brand' . $brands->name . 'DiHapus']);
    }
}
