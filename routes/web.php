<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'age'],function (){
    Route::get('age/{age}',function ($age){
        return $age;
    });
});
Route::get('user','User\UserController@getInfo');

//表单验证
Route::get('post/create','PostController@create');
Route::post('post','PostController@store');
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('excel/export','ExcelController@export');
Route::get('excel/import','ExcelController@import');
