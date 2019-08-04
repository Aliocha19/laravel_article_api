<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// List articles

Route::get('/articles', 'ArticleController@index');

//List single

Route::get('/articles/{id}', 'ArticleController@show');

// create an article

Route::post('/articles', 'ArticleController@store');

// update

Route::put('/articles', 'ArticleController@store');

// delete

Route::delete('/articles/{id}', 'ArticleController@destroy');