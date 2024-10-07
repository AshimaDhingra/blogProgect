<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;




Route::get('/',[PostController::class,'index']);
Route::get('/post-create',[PostController::class,'create']);
Route::post('/post-store',[PostController::class,'store']);
Route::get('/post-edit/{id}',[PostController::class,'edit']);
Route::put('/post-update/{id}',[PostController::class,'update']);
Route::get('/post-delete/{id}',[PostController::class,'destroy']);
Route::get('/post-show/{id}',[PostController::class,'show'])->name('posts.show');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post}/comments',[CommentController::class, 'store'])->name('comments.store');

//comment controller
Route::get('/comment-create',[CommentController::class,'create']);

// Route::post('/comment-store',[CommentController::class,'store']);




































