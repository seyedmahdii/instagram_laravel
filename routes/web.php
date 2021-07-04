<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;

Auth::routes();

Route::get('/profile/{user}', [ProfilesController::class, "index"]);
Route::get("/profile/{user}/edit", [ProfilesController::class, "edit"]);
Route::patch("/profile/{user}", [ProfilesController::class, "update"]);

Route::get("/", [PostsController::class, "index"]);
Route::get("/post/create", [PostsController::class, "create"]);
Route::post("/post", [PostsController::class, "store"]);
Route::get("/post/{post}", [PostsController::class, "show"]);

Route::post("/follow/{user}", [FollowsController::class, "store"]);