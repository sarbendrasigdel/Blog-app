<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = blog::all();
        return view('blog.blog',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();

        return view('blog.createblog',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new blog();
        $blog->title = $request->title;
        $blog->image = $request->image;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $imageName = time().$file->getClientOriginalName();
            $file->move('Blog',$imageName);
            $blog->image = 'Blog/'.$imageName;
        }
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->category_id = $request->category_id;

        $blog->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = blog::find($id);
        $category = Category::all();
        return view('blog.updateblog',compact('blog','category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $blog = blog::find($request->id);
        $blog->title = $request->title;
        $blog->image = $request->image;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $imageName = time().$file->getClientOriginalName();
            $file->move('Blog',$imageName);
            $blog->image = 'Blog/'.$imageName;
        }
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->category_id = $request->category_id;

        $blog->update();

        return redirect('/');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = blog::find($id);

        $blog->delete();

        return redirect('/');
    }
}
