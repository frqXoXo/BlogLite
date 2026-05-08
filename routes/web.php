<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $query = request('q');
    $postsQuery = Post::with('user');

    if ($query) {
        $postsQuery->where('title', 'like', '%' . $query . '%');
    }

    $posts = $postsQuery->get();
    return view('home', ['posts' => $posts]);
});

Route::post('/register', [userController::class, 'register']);
Route::post('/logout', [userController::class, 'logout']);
Route::post('/login', [userController::class, 'login']);

// Blog Post
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'editPost']);
Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';