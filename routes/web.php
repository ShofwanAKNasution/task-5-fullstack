<?php

use App\Models\Articles;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "Title" => "Home"
    ]);
});

Route::get('/post', function () {
    return view('post', [
        "Title" => "Post"
    ]);
});



Route::get('/articles', [PostController::class, 'index']);

Route::get('articles/{post:slug}', [PostController::class, 'show']);