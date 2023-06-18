<?php

use App\Http\Controllers\SearchController;
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
Route::get('/authgraphsazlogin', function () {
    return view('auth.login');
});
Route::group(['namespace' => 'App\Http\Controllers','prefix' => 'master' ,'middleware' => ['auth']], function () {
    Route::resource('/category' , 'CategoryController');
    Route::resource('/posts' , 'PostController');
    Route::resource('/gallery' , 'GalleryController');
    Route::resource('/users' , 'UserController');
    Route::resource('/sourceimage' , 'SourceController');
});

Route::get('/', '\App\Http\Controllers\FrontController@index');
Route::get('/package', '\App\Http\Controllers\PackController@index');
Route::get('/gallery', '\App\Http\Controllers\GallController@index');
Route::get('/post/{title}', '\App\Http\Controllers\PostShowController@index');
Route::get('/article' , '\App\Http\Controllers\ArticleController@index');
Route::get('/article/{title}' , '\App\Http\Controllers\CopostController@index');

Route::get('/search/', '\App\Http\Controllers\ArticleController@search')->name('search');

Auth::routes(['register' => false]);

