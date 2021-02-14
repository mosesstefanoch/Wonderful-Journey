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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/article/{id}','HomeController@desc');

Route::get('/category/{id}', 'HomeController@category');

Route::get('/aboutus', 'HomeController@aboutus');

Route::group(['middleware' => ['admin','auth']], function () {

    Route::get('/admin', 'HomeController@admin')->name('admin');
    Route::get('/user', 'HomeController@user')->name('user');

    Route::delete('/users/{id}', 'HomeController@deluser')->name('users.deluser');
    Route::delete('/admin/{id}', 'HomeController@delArticle')->name('admin.delArticle');
});

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/blog','HomeController@blog');
    Route::delete('/blog/{id}', 'HomeController@delArticle')->name('user.delArticle');

    Route::get('/newarticle', 'HomeController@newarticle');
    Route::post('/newarticle', 'HomeController@postarticle')->name('postarticle');

    Route::get('/profile', 'HomeController@profile');
    Route::get('/updateprofile', 'HomeController@seeprofile');
    Route::post('/updateprofile', 'HomeController@updateprofile')->name('updateprofile');
});