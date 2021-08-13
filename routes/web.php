<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@show')->name('showHome');
Route::get('/top10', 'TopTenController@show')->name('showTop');
Route::get('/info', 'InfoController@show')->name('showInfo');

Auth::routes();

Route::group(['namespace' => 'Select'], function () {
    Route::get('/select', 'BaseController')->name('select.base')->middleware('auth');
    Route::get('/select/create', 'CreateController')->name('select.create');
    Route::post('/select', 'StoreController')->name('select.store');
    Route::get('/select/edit', 'EditController')->name('select.edit');
    Route::get('/select/{page}', 'UpdateController')->name('select.update');
    Route::delete('/select/{interview}', 'DestroyController')->name('select.destroy');
});

Route::group(['namespace' => 'Profile'], function () {
    Route::get('/profile', 'BaseController')->name('profile.base')->middleware('auth');
    Route::get('/profile/gifts', 'GiftsController')->name('profile.gifts')->middleware('auth');
    Route::get('/profile/edit', 'EditController')->name('profile.edit');
    Route::patch('/profile', 'UpdateController')->name('profile.update');
});



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
