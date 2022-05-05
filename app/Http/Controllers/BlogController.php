<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Category;

class BlogController extends Controller
{
    //protect from middleware
    public function __construct() 
    {
        $this-> middleware('auth')-> except(['index', 'show']);
    }

    //to show blogs, searched blogs, or clicked category blog 
    public function index(Request $request) {
        if($request -> search){
            $posts = Post::where('title', 'like', '%' . $request -> search . '%')
            -> orWhere('body', 'like', '%' . $request -> search . '%')-> latest()-> paginate(4);
        } 
            else if($request-> category){
                $posts = Category::where('name', $request-> category)-> firstOrFail()-> posts()-> paginate(4)-> withQueryString();
            }
            else {
                //shows 4 latest blog posts on blog page
            $posts = Post::latest()-> paginate(4);
        }
        $categories = Category::all();
        return view('blogPosts.blog', compact('posts', 'categories'));
    }

    //create a blog with a category
    public function create() {
        $categories = Category::all();
        return view('blogPosts.create-blog-post', compact('categories'));
    }

    //store and create a blog 
    public function store(Request $request) {
        
        $request-> validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        $title = $request-> input('title');
        $category_id = $request-> input('category_id');
        
        if(Post::latest()-> first() !== null){
            $postId = Post::latest()-> first()-> id + 1;
        }
        else {
            $postId = 1;
        }

        $slug = Str::slug($title, '-') . '-' . $postId;
        $user_id = Auth::user()-> id;
        $body = $request-> input('body');

        //to upload an image file
        $imagePath = 'storage/' . $request-> file('image')-> store('postsImages','public');
        // $imagePath = 'users/' . $request-> file('image')-> store('public');

        $post = new Post();
        $post-> title = $title;
        $post-> category_id = $category_id;
        $post-> slug = $slug;
        $post-> user_id = $user_id;
        $post-> body = $body;
        $post-> imagePath = $imagePath;

        $post-> save();

        return redirect()-> back()-> with('status', 'Your post was created successfully!');

        // dd('Validation passed.');
    }

    //to edit a blog post
    public function edit(Post $post){
        if(auth()-> user()-> id !== $post-> user-> id){
            abort(403);
        }
        return view('blogPosts.edit-blog-post', compact('post'));
    }

    //updates the blog in database
    public function update(Request $request, Post $post){
        if(auth()-> user()-> id !== $post-> user-> id){
            abort(403);
        }
        $request-> validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required'
        ]);

        $title = $request-> input('title');
        $postId = $post-> id;
        $slug = Str::slug($title, '-') . '-' . $postId;
        $body = $request-> input('body');

        //to upload an image file
        $imagePath = 'storage/' . $request-> file('image')-> store('postsImages','public');
        // $imagePath = 'users/' . $request-> file('image')-> store('public');
        $post-> title = $title;
        $post-> slug = $slug;
        $post-> body = $body;
        $post-> imagePath = $imagePath;

        $post-> save();

        return redirect()-> back()-> with('status', 'Your post was edited successfully!');

        // dd('Validation passed.');
    }


    //using route model binding to show selected blog post and its 3 related blog posts
    public function show(Post $post){
        $category = $post-> category;

        $relatedPosts = $category-> posts()-> where('id', '!=', $post-> id)-> latest()-> take(3)-> get();
        return view('blogPosts.selected-blog-post', compact('post', 'relatedPosts'));
    }

    //to delete a blog post 
    public function destroy(Post $post){
        $post-> delete();
        return redirect()-> back()-> with('status', 'Your post was deleted successfully!');
    }

}
