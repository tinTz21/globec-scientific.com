<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController; 
use App\Http\Controllers\AboutImageController;
use App\Http\Controllers\CategoryController;
 
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

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::post('/dashboard/register/new_staff', [HomeController::class, 'register_staff'])->name('register_staff')->middleware('auth');

Route::get('/dashboard/staffs', [HomeController::class, 'staffs'])->name('staffs')->middleware('auth'); 

Route::get('/dashboard/staffs/register', [HomeController::class, 'register'])->name('add-staff')->middleware('auth'); 

Route::get('/dashboard/staffs/edit/{id}', [HomeController::class, 'edit_staff'])->name('edit-staff')->middleware('auth'); 

Route::post('/dashboard/staffs/store/{id}', [HomeController::class, 'store_edited_user'])->name('store_edited_user')->middleware('auth');

Route::get('/dashboard/about', [HomeController::class, 'about'])->name('about')->middleware('auth');

Route::get('/dashboard/about/images', [AboutImageController::class, 'index'])->name('about-images')->middleware('auth'); 

Route::get('/dashboard/about/images/new', [AboutImageController::class, 'create'])->name('add_about_image')->middleware('auth');

Route::post('/dashboard/about/images/store', [AboutImageController::class, 'store'])->name('store_about_image')->middleware('auth'); 

Route::get('/dashboard/about/images/delete/{id}', [AboutImageController::class, 'delete'])->name('delete-about-image')->middleware('auth');

Route::post('/dashboard/about/images/destroy/{id}', [AboutImageController::class, 'destroy'])->name('destroy-about-image')->middleware('auth'); 

Route::get('/dashboard/about/edit/{id}', [HomeController::class, 'edit_about'])->name('edit-about')->middleware('auth');

Route::post('/dashboard/about/store/{id}', [HomeController::class, 'store_about'])->name('store-about')->middleware('auth');

Route::get('/dashboard/products', [HomeController::class, 'products'])->name('products')->middleware('auth');

Route::get('/dashboard/products/add', [HomeController::class, 'add_product'])->name('add-product')->middleware('auth'); 

Route::post('/dashboard/products/store', [HomeController::class, 'store_product'])->name('store_product')->middleware('auth');

Route::get('/dashboard/products/edit/{id}', [HomeController::class, 'edited_product'])->name('edit-product')->middleware('auth'); 

Route::get('/dashboard/products/delete/{id}', [HomeController::class, 'delete_product'])->name('delete_product')->middleware('auth');

Route::get('/dashboard/products/destroy/{id}', [HomeController::class, 'destroy_product'])->name('destroy-product')->middleware('auth');

Route::get('/dashboard/career', [HomeController::class, 'career'])->name('career')->middleware('auth');

Route::get('/dashboard/contact_us', [HomeController::class, 'contact_us'])->name('contact_us')->middleware('auth');



Route::get('/dashboard/testimonies', [HomeController::class, 'testimonies'])->name('testimonies')->middleware('auth');

Route::get('/about', [AboutController::class, 'about'])->name('home-about');

Route::get('/product_and_solutions', [ProductController::class, 'index'])->name('home-product');

Route::get('/sub-category/products/{id}', [ProductController::class, 'sub_category_products'])->name('sub-product')->middleware('auth');

Route::get('/career', [CareerController::class, 'index'])->name('home-career');

Route::get('/contact-us', [ContactController::class, 'index'])->name('home-contact');

Route::get('/dashboard/contact-us/{id}', [ContactController::class, 'edit'])->name('edit-contact');
 
Route::post('/dashboard/contact-us/store/{id}', [ContactController::class, 'store'])->name('store-contact');

// News Controllers
Route::get('/dashboard/news', [HomeController::class, 'news'])->name('news')->middleware('auth');

Route::get('/news', [NewsController::class, 'index'])->name('home-news');

Route::get('/dashboard/news/{id}', [NewsController::class, 'edit_news'])->name('edit-news')->middleware('auth');

Route::post('/dashboard/news/store/{id}', [NewsController::class, 'store_news'])->name('store-news')->middleware('auth');

Route::get('/dashboard/news/delete/{id}', [NewsController::class, 'show'])->name('delete-news')->middleware('auth'); 

Route::post('/dashboard/news/destroy/{id}', [NewsController::class, 'destroy'])->name('destroy-news')->middleware('auth');

Route::get('/dashboard/news/more/{id}', [NewsController::class, 'more'])->name('more-news')->middleware('auth'); 

Route::get('/dashboard/news-create', [NewsController::class, 'create'])->name('add-news')->middleware('auth');

Route::post('/dashboard/store/', [NewsController::class, 'store_new_news'])->name('store-new-news')->middleware('auth');

Route::get('/news/show/{id}', [NewsController::class, 'show_news'])->name('home-show-news');

// Product and Solution quote
Route::get('/product/quote/{id}', [ProductController::class, 'product_quote'])->name('product_quote');

Route::post('/product/quote/thank-you/{id}', [ProductController::class, 'submit_quote'])->name('query-submit'); 

Route::get('/product/show/{id}', [ProductController::class, 'show_product'])->name('show-product')->middleware('auth'); 

// Customer
Route::get('/customers', [ProductController::class, 'customer_list'])->name('customers');

Route::get('/customers/show/{id}', [ProductController::class, 'show'])->name('show-customers')->middleware('auth');

Route::get('/customers/sorted/{id}', [ProductController::class, 'sorted'])->name('customer-sorted')->middleware('auth');  

Route::get('/customers/sorted/{id}', [CategoryController::class, 'sub_categorized_product'])->name('sub_categorized_product');

Route::get('/product/category/{id}', [CategoryController::class, 'index'])->name('category');