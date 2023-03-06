<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'redirect']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');;

Route::prefix('product')->group(function () {
    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
    Route::get('/poco-f1', [App\Http\Controllers\ProductController::class, 'pocof1'])->name('pocof1');
    Route::get('/xiaomi-mi10t', [App\Http\Controllers\ProductController::class, 'mi10t'])->name('mi10t');
    Route::get('/redmi-note-5', [App\Http\Controllers\ProductController::class, 'note5'])->name('note5');
    Route::get('/redmi-note-4x', [App\Http\Controllers\ProductController::class, 'note4x'])->name('note4x');
    Route::get('/redmi-2-prime', [App\Http\Controllers\ProductController::class, 'r2prime'])->name('r2prime');
});

Route::get('/news/{id?}', [App\Http\Controllers\NewsController::class, 'index'])->name('news');

Route::prefix('program')->group(function () {
    Route::get('/', [App\Http\Controllers\ProgramController::class, 'index'])->name('program');
    Route::get('/kuliah', [App\Http\Controllers\ProgramController::class, 'kuliah'])->name('programKuliah');
});

Route::get('/about-us', [App\Http\Controllers\AboutusController::class, 'index'])->name('about-us');

Route::resource('contact-us', ContactController::class, ['names' => ['index' => 'contact-us']]);
