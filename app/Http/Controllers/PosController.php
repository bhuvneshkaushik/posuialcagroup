<?php

namespace App\Http\Controllers;

use App\Pos;
use App\Products;
use App\Member;
use App\User;
use App\SalesTrx;
use App\tmpPos;
use DB;
use Uuid;
use Illuminate\Support\Carbon;
use App\SalesDetailTrx;
use Auth;
use Illuminate\Http\Request;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        $code= \DB::table('code')->where('code_id',1)->value('code');
    	if($code == '0'){
    		$code = Uuid::generate(4);
    	}
        $d['product'] = Products::orderBy('name','ASC')->get();
        $d['member'] = Member::orderBy('name','ASC')->get();
        $d['tmpPos'] = tmpPos::orderBy("id", "DESC")->get();
        $d['status'] = ['Termin', 'Pending','Cash'];
        return view('admin.pos.layouts.index',\compact('code'), $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $code)
    {
        // $member = Member::find($request->member_id);
        
        \DB::table('code')->where('code_id',1)->update([
    		'code'=>$code,
    	]);

        $product_id = $request->product_id;
        $qty = $request->qty;
        $member_id = $request->member_id;

        // $cek = count(\DB::table('tmp_pos')->where('product',$product_id)->where('qty',$qty)->get());
        $cek = count(DB::table('tmp_pos')->where('product_id', $product_id)->where('code', $code)->get());
        $memberNow = DB::table('tmp_pos')->where('product_id',$product_id)->where('code',$code)->value('member_id');
            DB::table('tmp_pos')->where('product_id',$product_id)->where('code',$code)->update([
               'member_id' => $memberNow
           ]);
        if($cek > 0){
            $qtyNow = \DB::table('tmp_pos')->where('product_id',$product_id)->where('code',$code)->value('qty');
            \DB::table('tmp_pos')->where('product_id',$product_id)->where('code',$code)->update([
    			'qty'=>$qtyNow+$qty
            ]);
            
           
        }else {
            DB::table('tmp_pos')->insert([
                'product_id' => $product_id,
                'code'=>$code,
                'member_id'=> $member_id,
                'qty'=> $qty
            ]);
        }

        
        return \redirect()->route('pos.index');
        // dd($m);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Pos  $pos
     * @return \Illuminate\Http\Response
     */
    public function show(Pos $pos)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pos  $pos
     * @return \Illuminate\Http\Response
     */
    public function edit(Pos $pos)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pos  $pos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pos $pos)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pos  $pos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tmp = tmpPos::find($id);
        $tmp->delete();
        return redirect()->route('pos.index');   
    }

    
}
