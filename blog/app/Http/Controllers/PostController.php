<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
    {
        $post=new Post;
        return view('posts/index')->with(['test' => $post->getPaginateByLimit()]);  
    }
}
