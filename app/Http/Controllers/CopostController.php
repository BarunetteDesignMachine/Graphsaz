<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Copost;
use App\Models\Post;
use Illuminate\Http\Request;

class CopostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($title)
    {
        $posts = Post::orderBy('created_at' , 'DESC')->paginate(3);
        $categories = Category::all();
        return view('copost' , compact('posts','categories'))
            ->with('post' , Post::where('title' , $title)->first());
    }

}
