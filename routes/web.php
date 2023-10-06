<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
})->name('home');

Route::get('/blog', function () {
    $posts = DB::table('posts')->get();
    return view('blog', ['posts' => $posts]);
});

Route::get('/blog/{slug}', function(string $slug) {
    $post = Post::where('slug', $slug)->get()->first();
    return view('post', ['post' => $post]);
});

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/comment',[CommentController::class, 'store'])->name('comment');
