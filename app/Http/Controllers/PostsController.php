<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        return $this->middleware("auth");
    }

    public function index(){
        $users_id = auth()->user()->following->pluck("user_id");
        
        $posts = Post::whereIn("user_id", $users_id)->latest()->get();

        return view("posts.index", compact("posts"));
    }

    public function create(){
        return view("posts.create");
    }

    public function store(Request $request){
        request()->validate([
            "caption" => "required | max:256",
            "image" => "required | image | mimes:png,jpg,jpeg | max:5048"
        ]);

        $newImageName = time() . "-" . auth()->user()->username . "-" . $request->image->extension();
        $request->image->move(public_path("uploads"), $newImageName);

        Post::create([
            "user_id" => auth()->user()->id,
            "caption" => $request->input("caption"),
            "image" => $newImageName
        ]);

        return redirect("/profile/" . auth()->user()->id);
    }

    public function show(Post $post){
        // $post = Post::findOrFail($postId);

        return view("posts.show", [
            "post" => $post
        ]);
    }
}
