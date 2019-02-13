<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
    $posts = Post::all();
    return view('welcome', compact('posts'));
    }

}
