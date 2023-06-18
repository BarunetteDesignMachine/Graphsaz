<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\PostShow;
use Illuminate\Http\Request;

class PostShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($title)
    {

        $posts = Post::where('category', $title)->simplepaginate(8);
        $categories=Category::all();
        return view('post' , compact( 'posts','categories'));
    }


}
