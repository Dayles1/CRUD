<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/posts', [PostController::class, 'index'])->name('index');


Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); 
Route::post('/posts/store', [PostController::class, 'store'])->name('store'); 

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.patch'); 
Route::patch('/posts/edit/{id}', [PostController::class, 'update'])->name('posts.update');

Route::get('/posts/pu/edit/{id}', [PostController::class, 'putEdit'])->name('posts.put') ;
Route::put('/posts/pu/edit/{id}', [PostController::class, 'putUpdate'])->name('posts.putUpdade'); 

Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{id}', [PostController::class, 'delete'])->name('posts.delete'); 










require __DIR__.'/auth.php';
