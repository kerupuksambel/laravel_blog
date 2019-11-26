<?php
// use Symfony\Component\Routing\Route;
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


Route::get('/', 'ArticleController@index');
Route::get('/blog/{id}', 'ArticleController@article');

Route::get('/comment/{id}', 'CommentController@create');
Route::post('/comment/post/{id}', 'CommentController@post');

Route::get('/comment/edit/{id}', 'CommentController@edit');
Route::post('/comment/edit/post/{id}', 'CommentController@edit_post');

Route::post('/comment/delete/{id}', 'CommentController@delete');
// Route::get('/blog/{}')