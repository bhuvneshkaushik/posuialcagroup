<?php

namespace App\Http\Controllers;

use App\Supplier;
// use App\Http\Controllers\Session;
use Illuminate\Http\Request;
use DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.supplier.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo 'HelloStoreSupplioer';
        // dd($request->all());
        $this->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'fax' => 'string',
            'phone'=>'required',
            'contact_person' => 'required',
            'supplierCPHP' => 'required',
            'status' => 'required'
        ]);

        $input = $request->all();
        Supplier::create($input);

        return redirect()->route('supplier.index')->with(['success'=>'Supplier'.$request->name .'Ditambahkan']);

        // $s = new Supplier;
        // $s->name = $request->input('name');
        // $s->address = $request->input('address');
        // $s->fax = $request->input('fax');
        // $s->phone = $request->input('phone');
        // $s->contact_person = $request->input('contact_person');
        // $s->supplierCPHP = $request->input('supplierCPHP');
        // $s->status = $request->input('status');
        // // $s->save();
        // if($s->save()){
        //     return redirect()->route('supplier.index')->with(['success'=>'Supplier'. $request->name . 'Ditambahkan']);
        // } else{
        //     return redirect()->back()->with(['errors'=>'Supplier'. $request->name .'Failed']);

        
    }

        // dd($s);
        // var_dump(s$s);
        // return redirect()->route('supplier.index')->with(['success'=>'Supplier'. $request->name . 'Ditambahkan']);

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
