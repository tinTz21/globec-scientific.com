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
    return view('index');
});

// Route::get('master', ShowPosts::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/products', [App\Http\Controllers\HomeController::class, 'products'])->name('products');

Route::get('/career', [App\Http\Controllers\HomeController::class, 'career'])->name('career');

Route::get('/contact_us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact_us');

Route::get('/news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');

Route::get('/testimonies', [App\Http\Controllers\HomeController::class, 'testimonies'])->name('testimonies');