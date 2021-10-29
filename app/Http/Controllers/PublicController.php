<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function home(){
        $name = "Kaspar";
        $array = ['piim', 'sai', 'leib'];
        return view('home', compact('name', 'array'));
    }

    public function posts(){
        //$posts = Post::select(['title', 'id'])->where('title','LIKE', '%x%')->where('id', '<', 500)->limit(10)->orderBy('title', 'desc')->get();
        $posts = Post::simplePaginate(16);
        return view('posts', compact('posts'));
    }
}
