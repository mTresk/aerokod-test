<?php

use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    'users' => UserController::class,
    'posts' => PostController::class,
]);