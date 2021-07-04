<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user){
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        return view("profiles.index", [
            "user" => $user,
            "follows" => $follows
        ]);
    }

    public function edit(User $user){
        $this->authorize("update", $user->profile);
        
        return view("profiles.edit", compact("user"));
    }

    public function update(User $user){
        $this->authorize("update", $user->profile);

        request()->validate([
            "url" => "url",
            "image" => "image | mimes:png,jpg,jpeg | max:5048"
        ]);

        if(request()->image){
            $newImageName = time() . "-" . $user->username . "-" .request()->image->extension();
            request()->image->move(public_path("uploads"), $newImageName);
        }

        $user->profile->update([
            "title" => request()->input("title"),
            "description" => request()->input("description"),
            "url" => request()->input("url"),
            "image" => $newImageName ?? $user->profile->image
        ]);

        return redirect("/profile/" . $user->id);
    }
}
