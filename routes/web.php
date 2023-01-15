<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function (){
    return Inertia::render('Start');
})->name('start');

Route::get('/home', \App\Http\Controllers\HomeController::class)->name('home.index');
Route::get('/top', [\App\Http\Controllers\TopTenController::class, 'index'])->name('top.index');

Route::get('/selection', [\App\Http\Controllers\SelectionController::class, 'index'])->name('selection.index');
Route::post('/selection', [\App\Http\Controllers\SelectionController::class, 'store'])->name('selection.store');
Route::patch('/selection', [\App\Http\Controllers\SelectionController::class, 'update'])->name('selection.update');
Route::delete('/selection/{selection}', [\App\Http\Controllers\SelectionController::class, 'delete'])->name('selection.delete');
Route::get('/selection/finish', [\App\Http\Controllers\SelectionController::class, 'finish'])->name('selection.finish');
Route::get('/selection/restart', [\App\Http\Controllers\SelectionController::class, 'restart'])->name('selection.restart');


Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->middleware(['auth', 'verify.user'])->name('profile.index');
Route::get('/profile/gifts', [\App\Http\Controllers\ProfileController::class, 'gifts'])->middleware(['auth', 'verify.user'])->name('profile.gifts');
Route::get('/profile/{selection}', [\App\Http\Controllers\SelectionController::class, 'profile'])->name('profile.selection');

Route::get('/info', \App\Http\Controllers\InfoController::class)->name('info.index');

Route::get('/random', [\App\Http\Controllers\RandomController::class, 'index'])->name('random.index');
Route::get('/random/{price}', [\App\Http\Controllers\RandomController::class, 'result'])->whereIn('price', ['50', '300', '1000', 'unlimited'])->name('random.result');

Route::get('/gift/{product}', [\App\Http\Controllers\SelectionController::class, 'gift'])->name('gift.show');
require __DIR__.'/auth.php';
