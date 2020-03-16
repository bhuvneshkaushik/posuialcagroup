<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = DB::table('categories')->get();
        return view('admin.category.index', compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view create category
        // $categoriesCode = Category::where('categoryCode');
        // $categoryCode = Category::pluck('categoryCode');
        // echo $categoryCode->categoryCode;
        
        return view('admin.category.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'status' => 'nullable|string'
        ]);


        // $category = Category::create([
        //     'name' => $request->name,
        //     'status' => $request->status
        // ]); 

        try{
            $category = Category::firstOrCreate([
                'name' => $request->name],
                ['status' => $request->status],
                ['categoryCode'=>$request->categoryCode]
            );
            // return view('admin.layouts.category',compac('category'));

            return redirect()->route('category.index')->with(['success' => 'Category'. $category->name . 'Ditambahkan']);
        } catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrfail($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'      => 'required|string|max:50',
            'status'    => 'nullable|string'
        ]);
        try{
            $categories = Category::findOrFail($id);
            $categories->update([
                'name' => $request->name,
                'status' => $request->status
            ]);
            return redirect()->route('category.index')->with(['success' => 'Category'. $categories->name . 'Ditambahkan']);
        } catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::findOrfail($id);
        $categories->delete();
        return redirect()->route('category.index')->with(['success' => 'Category'. $categories->name . 'Dihapus']);
    }
}
