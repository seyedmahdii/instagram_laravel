<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;

Auth::routes();

Route::get('/profile/{user}', [ProfilesController::class, "index"]);

Route::get("/post/create", [PostsController::class, "create"]);
Route::post("/post", [PostsController::class, "store"]);
Route::get("/post/{post}", [PostsController::class, "show"]);