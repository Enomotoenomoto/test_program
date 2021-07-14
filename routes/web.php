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

//Route::get('/main', function () {
//    return view('welcome');
//});

Route::get('/', 'UserController@test');
Route::post('/', 'UserController@test');

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/post1', function () {
    return view('post');
}); 

Route::get('/top', function () {
    return view('top');
});

// 単独の投稿ページを表示する
Route::get('/show/{id}', 'FormController@show');

// 投稿ページを表示
Route::get('/create', 'FormController@postpage');
// 投稿をコントローラーに送信
Route::post('/newpostsend', 'FormController@savenew'); 

// 投稿一覧を表示する
Route::get('/index', 'FormController@index');

// リッチテキストエディターページ
Route::get('create2', 'FormController@wys');