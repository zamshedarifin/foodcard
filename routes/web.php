<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Front\FrontPageController;

// Backend design
Route::group(['namespace'=>'Admin', 'as'=>'admin.', 'prefix'=>'admin'], function () {
    Route::namespace('Auth')->group(function () {
        Route::get('/-auth', 'LoginController@showLoginForm')->name('login');
        Route::post('/-auth', 'LoginController@login')->name('login');
        Route::get('logout', 'LoginController@logout')->name('logout');
    });

    Route::middleware('admin')->group(function () {

    });
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');



    // Routes all for Card Menu
    Route::get('card/card-selection', [CardController::class, 'cardSelection'])->name('card.selection');
});


// Front Page Design

Route::group(['namespace'=>'Front', 'as' => 'front.'], function (){
   Route::get('/', [FrontPageController::class, 'index'])->name('homepage');
});
