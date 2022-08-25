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

Route::get('/','BlogController@display')->name('blog');
Route::get('/category/{name}','BlogController@displayCategory')->name('category');
Route::get('/about-me','BlogController@displayAboutMe');
Route::get('/contact','BlogController@displayContact');
Route::get('/galery','BlogController@displayGalery');

Route::get('/admin/article','ArticleController@display')->name('article');
Route::post('/admin/article','ArticleController@store');
Route::get('/admin/article/{id}','ArticleController@view')->name('article-view');

Route::get('/article-show/{id}','ArticleController@show')->name('article-show');
Route::put('/article-show/{id}','ArticleController@edit');
Route::delete('/article-show/{id}','ArticleController@delete');

Route::get('/admin/about-me','AboutMeController@display')->name('about-me');
Route::post('/admin/about-me','AboutMeController@store');

Route::get('/admin/calendar','CalendarController@display')->name('calendar');

Route::get('/admin/contact','ContactController@display')->name('contact');
Route::post('/admin/contact','ContactController@store');

Route::get('/admin/my-work','MyWorkController@display')->name('my-work');

Route::get('/admin/upload','UploadController@display')->name('upload');
Route::post('save','UploadController@save');
Route::delete('delete/{id}','UploadController@delete');