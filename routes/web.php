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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');;

Route::prefix('product')->group(function () {
    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
});

Route::get('/news/{id?}', [App\Http\Controllers\NewsController::class, 'index'])->name('news');

Route::prefix('program')->group(function () {
    Route::get('/', [App\Http\Controllers\ProgramController::class, 'index'])->name('program');
});

Route::get('/about-us', [App\Http\Controllers\AboutusController::class, 'index'])->name('about-us');

Route::resource('contact-us', ContactController::class, ['names' => ['index' => 'contact-us']]);
