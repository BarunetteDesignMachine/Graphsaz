<?php

namespace App\Http\Controllers;

//use App\Models\Front;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends HelpController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('created_at' , 'DESC')->paginate(3);
        return view('home' , compact('posts' , 'categories') );

    }

}
