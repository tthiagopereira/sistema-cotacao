<?php

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', 'HomeController@paginaInicial');

    //Usuários
    Route::resource('user', 'UserController');


    //Dashboard

});

Route::view('/sample/error404', 'errors.404')->name('error404');
Route::view('/sample/error500', 'errors.500')->name('error500');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
