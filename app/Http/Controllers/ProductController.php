<?php

namespace App\Http\Controllers;

use App\Products;
// use Validator; 
use DB;
use App\Category;
// use App\Brand;
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
        $d['today'] = date('Y-m-d');
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
        // $brands = DB::table('brands')->where('status','=','y')->orderBy('id','DESC')->get();
        $units = ['Pcs','Buah','Kardus','Kodi'];
        return view('admin.product.create',compact('category','supplier','units'));
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
            'no_sku'=>'required',
            'name' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'stock'=>'required',
            'diskon_1' => 'required',
            'diskon_2' => 'required',
            'diskon_3' => 'required',
            'harga_beli'=> 'required',
            'harga_jual_1'=>'required',
            'harga_jual_2'=>'required',
            'harga_jual_3'=>'required',
            'ppn_beli'=>'required',
            'ppn_jual'=>'required',
            'laba'=>'required',
            'satuan'=>'required',
            'expired_date' => 'required'
        ]);

        $d = new Products;
        $d->no_sku = $request->no_sku;
        $d->name = $request->name;
        $d->category_id = $request->category_id;
        $d->supplier_id = $request->supplier_id;
        $d->stock = $request->stock; 
        $d->diskon = $request->diskon;
        $d->diskon_1 = $request->diskon_1;
        $d->diskon_2 = $request->diskon_2;
        $d->diskon_3 = $request->diskon_3;
        $d->satuan = $request->satuan;
        $d->ppn_beli = $request->ppn_beli;
        $d->ppn_jual = $request->ppn_jual;
        $d->harga_beli = $request->harga_beli;
        $d->harga_jual_1 = $request->harga_jual_1;
        $d->harga_jual_2 = $request->harga_jual_2;
        $d->harga_jual_2 = $request->harga_jual_3;
        $d->laba = $request->laba;
        $d->expired_date = $request->expired_date;

        if($d->save()){
            return \redirect()->route('product.index')->with(['success' => 'Product'. $request->input('name'). 'Ditambahkan']);
        }else {
            return \redirect()->back()->with(['errors' => 'Product'. $request->input('name'). 'Failed']);
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
        $category = DB::table('categories')->where('status','=','y')->orderBy('id','DESC')->get();
        $supplier = DB::table('suppliers')->where('status','=','y')->orderBy('id','DESC')->get();
        // $brands = DB::table('brands')->where('status','=','y')->orderBy('id','DESC')->get();
        $units = ['Pcs','Buah','Kardus','Kodi'];
        return view('admin.product.edit', \compact('products','category','supplier','units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        $d = Products::find($id);
        $d->name = $request->name;
        $d->category_id = $request->category_id;
        $d->supplier_id = $request->supplier_id;
        // $d->brand_id = $request->brand_id;
        $d->stock = $request->stock; 
        $d->diskon = $request->diskon;
        $d->unit = $request->unit;
        $d->ppn = $request->ppn;
        $d->harga_beli = $request->harga_beli;
        $d->harga_jual = $request->harga_jual;
        $d->laba = $request->laba;
        $d->expired_date = $request->expired_date;
        // dd($d);
        if($d->save()){
            return redirect()->route('product.index')->with(['success' => 'Products'. $d->name .'Diubah']);
        }else{
            return \redirect()->back()->with(['errors'=>'Products'. $d->name .'Failed']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);
        if($products->delete()){
            return redirect()->route('product.index')->with(['success'=>'Product'. $products->name .'Dihapus']);
        } else{
            return redirect()->back()->with(['errors'=>'Products'. $products->name . 'Failed']);
        }
    }
}
