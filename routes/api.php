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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', 'AdminController@getArticles');
// Route::get('/article/{id}', 'AdminController@getArticle');
Route::get('/about', 'AdminController@getAbout');
Route::get('/images', 'AdminController@getImages');
Route::get('/categories', 'AdminController@getCategory');