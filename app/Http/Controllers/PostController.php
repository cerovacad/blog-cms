<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.posts.create', compact('categories'));
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
            'title' => 'required|max:255',
            'body' => 'required',
            'featured' => 'required|image',
            'category' => 'required'
        ]);
        
        //GET FEATURED IMAGE FROM REQUEST
        $fetaured = request('featured');
        //RENAME IMAGE BY CONCATINATING TIME
        $featured_img_new_name = time().$fetaured->getClientOriginalName();
        //MOVE IT TO PUBLIC/UPLOADED/POSTS DIRECTORY
        $fetaured->move('uploads/posts', $featured_img_new_name);
        //GET ID FROM CATEGORY NAME
        $category_id = Category::where('name', $request->category)->first()->id;
        
        Post::create(['title'    => request('title'),
                      'body'     => request('body'), 
                      'featured' => $featured_img_new_name, 
                      'category_id' => $category_id
                    ]);

        return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
