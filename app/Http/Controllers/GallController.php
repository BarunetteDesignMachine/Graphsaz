<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gall;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        $categories = Category::all();
        return view('gallery' , compact('categories','gallery'));
    }

}
