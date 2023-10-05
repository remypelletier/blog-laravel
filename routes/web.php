<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    $posts = DB::table('posts')->get();
    return view('blog', ['posts' => $posts]);
});

Route::get('/blog/{slug}', function(string $slug) {
    $post = Post::where('slug', $slug)->get()->first();
    return view('post', ['post' => $post]);
});
