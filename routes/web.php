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

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', \App\Http\Controllers\HomeController::class)->name('home.index');
Route::get('/top', [\App\Http\Controllers\TopTenController::class, 'index'])->name('top.index');
Route::get('/selection', [\App\Http\Controllers\SelectionController::class, 'index'])->name('selection.index');
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->middleware(['auth', 'verify.user'])->name('profile.index');
Route::get('/info', \App\Http\Controllers\InfoController::class)->name('info.index');
require __DIR__.'/auth.php';
