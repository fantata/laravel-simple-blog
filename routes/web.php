<?php

use Illuminate\Support\Facades\Route;
use Fantata\LaravelSimpleBlog\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/add', [PostController::class, 'add'])->name('posts.add');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
