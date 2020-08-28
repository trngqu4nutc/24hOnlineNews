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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [
    'as' => 'login',
    'uses' => 'AuthController@login'
]);

Route::post('/login', [
    'as' => 'login.submit',
    'uses' => 'AuthController@loginSubmit'
]);

Route::prefix('/admin')->group(function (){
    Route::group(array('namespace'=>'Admin'), function()
    {
        Route::get('/', [
            'as' => 'admin.home',
            'uses' => 'AdminHomeController@index',
            'middleware' => 'can:admin-home'
        ]);
    });
});
