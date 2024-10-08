<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PhotoController;
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

Route::get('/',[RegisterController::class,'create'])->name('reg');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/register', [RegisterController::class,'store'])->name('register');
Route::post('/check', [LoginController::class,'check'])->name('check');
Route::get('/thanks',[RegisterController::class]);




Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::POST('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/profile', [PostController::class, 'profile'])->name('profile');
Route::get('/post/profile', [PostController::class, 'profile'])->name('post.profile');



// routes/web.php

Route::post('/post/{post}/like', [PostController::class, 'like'])->name('post.like');
Route::post('/post/{post}/comment', [PostController::class, 'comment'])->name('post.comment');



Route::get('/profile/edit', [ProfilController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfilController::class, 'update'])->name('profile.update');


Route::get('/home', [PostController::class, 'home'])->name('home');
// routes/web.php


Route::post('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts/{post}/delete', [PostController::class, 'delete'])->name('posts.delete');

