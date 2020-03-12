<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;
use Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m['members'] = Member::all();
        $m['m'] = User::all();
        return view('admin.member.index', $m);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.create');
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
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ]);

        $m = new Member;
        $m->name = $request->name;
        $m->address = $request->address;
        $m->phone = $request->phone;
        $m->user_id = Auth::user()->id;
        if($m->save()){
            return redirect()->route('member.index')->with(['success'=>'Member'. $request->name .'Ditambahkan']);
        } else{
            return \redirect()->back()->with(['errors'=>'Member'. $request->name .'Failed']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
        \abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Member::findOrfail($id);
        return view('admin.member.edit', \compact('members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $m = Member::findOrfail($id);
            $m->update([
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'user_id' => Auth::user()->id
            ]);
            return redirect()->route('member.index')->with(['success'=>'Member'. $request->name .'Diubah']);
        } catch(\Exception $e){
            return redirect()->back()->with(['error'=> $e->getMessages()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = Member::findOrfail($id);
        if($members->delete()){
            return redirect()->route('member.index')->with(['success'=>'Member'. $members->name . 'Dihapus']);

        } else{
            return redirect()->back()->with(['error'=>'Member'. $members->name . 'Failed']);
        }
        
    }
}
