<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome to homepage";
});




Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('/-auth', 'LoginController@showLoginForm')->name('login');
        Route::post('/-auth', 'LoginController@login')->name('login');
        Route::get('logout', 'LoginController@logout')->name('logout');
    });

    Route::middleware('admin')->group(function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    });

});

