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



Auth::routes();

Route::group(['middleware'=>['auth','has.permission']], function(){

    Route::get('/', function () {
        return view('welcome');
    });

//    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('department', 'DepartmentController');

    Route::resource('role', 'RoleController');

    Route::resource('users', 'UserController');

    Route::resource('permissions', 'PermissionController');

    Route::resource('leaves', 'LeaveController');

});

Auth::routes();
