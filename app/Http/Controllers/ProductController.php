<?php

namespace App\Http\Controllers;

use App\Products;
// use Validator; 
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
        
        $d['products'] = Products::orderBy("id", "DESC")->get();
        
        return view('admin.product.index', $d);
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
        
        $this->validate($request,[
            'name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'supplier_id' => 'required',
            'stock'=>'required',
            'diskon' => 'required',
            'unit'=>'required',
            'ppn'=>'required',
            'harga_beli'=> 'required',
            'harga_jual'=>'required',
            'laba'=>'required',
            'expired_date' => 'required'
        ]);

        $d = new Products;
        $d->name = $request->name;
        $d->category_id = $request->category_id;
        $d->supplier_id = $request->supplier_id;
        $d->brand_id = $request->brand_id;
        $d->stock = $request->stock; 
        $d->diskon = $request->diskon;
        $d->unit = $request->unit;
        $d->ppn = $request->ppn;
        $d->harga_beli = $request->harga_beli;
        $d->harga_jual = $request->harga_jual;
        $d->laba = $request->laba;
        $d->expired_date = $request->expired_date;

        if($d->save()){
            return \redirect()->route('product.index')->with(['success' => 'Product'. $request->input('name'). 'Ditambahkan']);
        }else {
            return \redirect()->back()->with(['error' => 'Product'. $request->input('name'). 'Failed']);

        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(r $r)
    {
        \abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        return view('admin.product.edit', \compact('products'));
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
