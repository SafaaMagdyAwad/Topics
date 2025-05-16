<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'category' => 'required|string|unique:categories,category',
        ]);
        Category::create($data);
        return redirect()->route('category.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data=$request->validate([
            'category' => 'required|string|unique:categories,category,'. $category->id ,
        ]);
        $category->update($data);
        return redirect()->route('category.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Category::with('topics')->findOrFail($id);
        // dd($category->topics->count());
        if($category->topics->count() != 0){
            return redirect()->back()->with('error',"This Category Can't Be Deleted !");
        }
        $category->delete();
        return redirect()->back()->with('success',"This Category Was Deleted Successfully !");
    }
}
