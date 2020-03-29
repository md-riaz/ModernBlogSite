<?php

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

Route::get('/', function () {
    return view('index');
});

// Main Page
Route::get('/admin/main', 'FrontendController@main')->name('admin.page');

// Categories
Route::get('/add/category', 'CategoryController@AddCategory')->name('add.category');
Route::get('/all/category', 'CategoryController@AllCategory')->name('all.category');

Route::get('/view/category/{id}', 'CategoryController@ViewCategory');
Route::get('/edit/category/{id}', 'CategoryController@EditCategory');
Route::post('/update/category/{id}', 'CategoryController@UpdateCategory');
Route::get('/delete/category/{id}', 'CategoryController@DeleteCategory');

Route::post('store/category', 'CategoryController@StoreCategory')->name('store.category');

// Post 
Route::get('/write/post', 'PostController@WritePost')->name('write.post');
