<?php

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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/signup', ['uses' => 'UserController@postSignUp', 'as' => 'signup']);
Route::post('/login', ['uses' => 'UserController@postLogin', 'as' => 'login']);
Route::get('/login', ['uses' => 'UserController@getLogin', 'as' => 'login']);
Route::get('/logout', ['uses' => 'UserController@getLogout', 'as' => 'logout']);
Route::get('/account', ['uses' => 'UserController@getAccount', 'as' => 'account']);
Route::post('/account', ['uses' => 'UserController@saveAccount', 'as' => 'account.save']);
Route::get('/userimage/{fileName}', ['uses' => 'UserController@getUserImage', 'as' => 'account.image']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [
        'uses' => 'PostController@getDashboard',
        'as' => 'dashboard'
    ]);
});

Route::prefix('posts')->middleware(['auth'])->group(function () {
    Route::post('/create', ['uses' => 'PostController@postCreate', 'as' => 'post.create']);
    Route::get('/delete/{postId}', ['uses' => 'PostController@deletePost', 'as' => 'post.delete']);
    Route::post('/edit', ['uses' => 'PostController@postEditPost', 'as' => 'post.edit']);
    Route::post('/like', ['uses' => 'PostController@likePost', 'as' => 'post.like']);
});