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
}
