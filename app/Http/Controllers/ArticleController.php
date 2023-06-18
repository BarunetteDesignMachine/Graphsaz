<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view('article' , compact('posts','categories'));
    }
    public function search(Request $request){
        $categories = Category::all();
        $search = $request->input('search');
        $posts = Post::query()
            ->where('title','LIKE',"%{$search}%")
            ->orWhere('description','LIKE',"%{$search}%")
            ->get();
        return view('search' , compact('posts' , 'categories'));
    }

}
