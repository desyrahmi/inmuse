<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', ['uses' => 'MainController@index', 'as' => 'index']);

//Route::get('/album/1', ['uses' => 'MainController@showAlbum', 'as' => 'album.detail']);
Route::get('/album/{id}', ['uses' => 'MainController@showAlbum', 'as' => 'album.detail']);
Route::get('/discover', ['uses' => 'MainController@discover', 'as' => 'discover']);
Route::get('/people', ['uses' => 'MainController@people', 'as' => 'people']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', ['uses' => 'AuthController@index', 'as' => 'auth.index']);
    Route::post('/login', ['uses' => 'AuthController@doLogin', 'as' => 'auth.doLogin']);
    Route::get('/register', ['uses' => 'AuthController@register', 'as' => 'auth.register']);
    Route::post('/register', ['uses' => 'UserController@create', 'as' => 'user.register']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile/{username}', ['uses' => 'UserController@showProfile', 'as' => 'user.profile']);
    Route::get('/user/edit/{id}', ['uses' => 'UserController@showEditForm', 'as' => 'user.edit.show']);
    Route::post('/user/edit/{id}', ['uses' => 'UserController@update', 'as' => 'user.edit']);

    Route::get('/list-album', ['uses' => 'AlbumController@index', 'as' => 'list.album']);
    Route::get('/add-album', ['uses' => 'AlbumController@addIndex', 'as' => 'add.album.index']);
    Route::post('/add-album', ['uses' => 'AlbumController@create', 'as' => 'add.album']);
    Route::get('/delete-album/{id}', ['uses' => 'AlbumController@delete', 'as' => 'delete.album']);

    Route::get('/list-song', ['uses' => 'SongController@index', 'as' => 'list.song']);
    Route::get('/add-song', ['uses' => 'SongController@addIndex', 'as' => 'add.song.index']);
    Route::post('/add-song', ['uses' => 'SongController@create', 'as' => 'add.song']);
    Route::get('/delete-song/{id}', ['uses' => 'SongController@delete', 'as' => 'delete.song']);

    Route::get('/logout', ['uses' => 'AuthController@doLogout', 'as' => 'auth.doLogout']);

    Route::get('/dashboard', ['uses' => 'MainController@adminIndex', 'as' => 'admin.index']);
});
