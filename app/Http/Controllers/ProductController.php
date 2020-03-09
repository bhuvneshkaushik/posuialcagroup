<?php

namespace App\Http\Controllers;

use App\Products;
use Validator; 
use DB;
use App\Category;
use App\Brand;
use App\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        
        return view('admin.product.index',\compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('categories')->where('status','=','y')->orderBy('id','DESC')->get();
        $supplier = DB::table('suppliers')->where('status','=','y')->orderBy('id','DESC')->get();
        $brands = DB::table('brands')->where('status','=','y')->orderBy('id','DESC')->get();
        $units = ['Pcs','Buah','Kardus','Kodi'];
        return view('admin.product.create',compact('category','supplier','brands','units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate([
            'name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'supplier_id' => 'required',
            'stock'=>'required',
            'barcode'
        ]);
        $input = $request->all();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(r $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(r $r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, r $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(r $r)
    {
        //
    }
}
