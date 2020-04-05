<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@index');

Auth::routes();

// Main Admin Page
Route::get('/home', 'AdminController@index')->name('home')->middleware('auth');
// Categories
Route::resource('category', 'CategoryController');

// Post 
Route::resource('post', 'PostController');

// Category Posts
Route::get('/categories/{slug}', 'IndexController@CategoryPosts');
