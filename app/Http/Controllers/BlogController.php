<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('blogPosts.blog', compact('posts'));
    }

    public function create() {
        return view('blogPosts.create-blog-post');
    }

    public function store(Request $request) {
        $request-> validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required'
        ]);

        $title = $request-> input('title');
        $slug = Str::slug($title, '-');
        $user_id = Auth::user()-> id;
        $body = $request-> input('body');

        //to upload an image file
        $imagePath = 'storage/' . $request-> file('image')-> store('postsImages','public');
        // $imagePath = 'users/' . $request-> file('image')-> store('public');

        $post = new Post();
        $post-> title = $title;
        $post-> slug = $slug;
        $post-> user_id = $user_id;
        $post-> body = $body;
        $post-> imagePath = $imagePath;

        $post-> save();

        return redirect()-> back()-> with('status', 'Your post was created successfully!');

        // dd('Validation passed.');
    }

    public function show($slug) {
        $post = Post::where('slug', $slug)-> first();
        return view('blogPosts.selected-blog-post', compact('post'));
    }

}
