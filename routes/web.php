<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/posts', [PostController::class, 'search'])->name('posts.search');

Route::get('/offers/{id}', [CategoryController::class, 'show'])->name('categories.show');

// Route::post('/', [HomeController::class, 'search'])->name('categories.search');

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::resource('posts', PostController::class); //->middleware('auth')

