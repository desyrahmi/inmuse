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

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', ['uses' => 'AuthController@index', 'as' => 'auth.index']);
    Route::post('/login', ['uses' => 'AuthController@doLogin', 'as' => 'auth.doLogin']);
    Route::get('/register', ['uses' => 'AuthController@register', 'as' => 'auth.register']);
    Route::post('/register', ['uses' => 'UserController@create', 'as' => 'user.register']);
});
Route::group(['middleware' => ['auth']], function () {
//    Route::get('/profile/{id}', ['uses' => 'MainController@profile', 'as' => 'profile']);
    Route::get('/user/edit/{id}', ['uses' => 'UserController@showEditForm', 'as' => 'user.edit.show']);
    Route::post('/user/edit/{id}', ['uses' => 'UserController@update', 'as' => 'user.edit']);
    Route::get('/logout', ['uses' => 'AuthController@doLogout', 'as' => 'auth.doLogout']);
    Route::group(['middleware' => ['role:Administrator']], function () {
        Route::get('/user', ['uses' => 'UserController@index', 'as' => 'user.show']);
        Route::get('/user/add', ['uses' => 'UserController@addIndex', 'as' => 'user.add.index']);
        Route::get('/user/delete/{id}', ['uses' => 'UserController@delete', 'as' => 'user.delete']);
    });
    Route::get('/profile/{id}', ['uses' => 'UserController@showProfile', 'as' => 'user.profile']);
});
//Route::get('/album/{id}', ['uses' => 'MainController@showAlbum', 'as' => 'album.detail']);
Route::get('/album/1', ['uses' => 'MainController@showAlbum', 'as' => 'album.detail']);
Route::get('/discover', ['uses' => 'MainController@discover', 'as' => 'discover']);
Route::get('/people', ['uses' => 'MainController@people', 'as' => 'people']);
Route::get('/project', ['uses' => 'ProjectController@index', 'as' => 'project.show']);