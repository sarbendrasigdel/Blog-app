<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category= Category::all();
        return view('category.category', compact('category'));
    }

    public function createCategory()
    {
        return view('category.createCategory');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;
        $category->image = $request->image;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $imageName = time().$file->getClientOriginalName();
            $file->move('category',$imageName);
            $category->image = 'category/'.$imageName;
        }

        $category->save();
        return redirect('/viewCategory');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('category.updatecategory',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->image = $request->image;

        $category->update();
        return redirect('/viewCategory');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/viewCategory');
    }
}
