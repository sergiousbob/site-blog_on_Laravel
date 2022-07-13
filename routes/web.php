<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});/*



/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PostController@index')->name('blog.index');

Route::get('post/index', 'PostController@index')->name('post.index');
Route::get('post/search', 'PostController@search')->name('post.search');
Route::get('post/create', 'PostController@create')->name('post.create')->middleware('auth');
Route::post('post/store', 'PostController@store')->name('post.store')->middleware('auth');
Route::get('post/show/{id}', 'PostController@show')->name('post.show');
///Route::get('post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::get('post/edit/{id}', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::patch('post/update/{id}', 'PostController@update')->name('post.update')->middleware('auth');
Route::delete('post/destroy/{id}', 'PostController@destroy')->name('post.destroy')->middleware('auth');

Auth::routes();
