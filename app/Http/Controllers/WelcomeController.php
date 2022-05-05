<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WelcomeController extends Controller
{
    //shows the latest 4 posts in the home page
    public function index (){
        $posts = Post::latest()-> take(4)-> get();
        return view('welcome', compact('posts'));
    }
}
