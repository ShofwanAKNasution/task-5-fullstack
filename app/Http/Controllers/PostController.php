<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('articles', [
            "Title" => "Articles",
            "posts" => Articles::all()
        ]);
    }

    public function show(Articles $post)
    {
        return view('article', [
            "Title" => "Single Post",
            "post" => $post
        ]);
    }
}
