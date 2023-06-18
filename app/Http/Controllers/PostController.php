<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends HelpController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view( 'admin_dashboard.blog.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin_dashboard.blog.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'shorted' => 'required',
            'image_path' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $image=$this->imageUploader($request['image_path']);
        Post::create([
            'title' => $request['title'],
            'category' => $request['category'],
            'description' => $request['description'],
            'shorted' => $request['shorted'],
            'image_path' => $image,
        ]);


        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $posts = Post::find($id);
        return view('admin_dashboard.blog.edit' , compact('categories'))
            ->with('post' , Post::where('id' , $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Post::where('id' , $id)
            ->update([
                'title' => $request['title'],
                'description' => $request['description'],
                'category' => $request['category'],
                'shorted' => $request['shorted']
            ]);
//            dd('done');
        return redirect(url('/master/posts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::where('id' , $id);
        $posts->delete();

        return redirect(route('posts.index'))
            ->with('massage' , 'Your Post Has Been Deleted!');
    }
}
