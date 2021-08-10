<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', 'PostController@index');
Route::post('/add', 'PostController@store');
Route::get('/post/{id}', 'PostController@show');
Route::delete('/delete/{post}', 'PostController@destroy');
Route::put('/update/{post}', 'PostController@update');


Route::post('/add-comment', 'CommentController@store');
Route::get('/comment/{id}', 'CommentController@show');
Route::delete('/delete1/{comment}', 'CommentController@destroy');
Route::put('/update1/{comment}', 'CommentController@update');
Route::get('/comments', 'CommentController@index');