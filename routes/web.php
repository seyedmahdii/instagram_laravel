<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;

Auth::routes();

Route::get('/profile/{userId}', [ProfilesController::class, "index"]);
