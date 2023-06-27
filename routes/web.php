<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('path/{id?}/{search?}',[FrontendController::class,'pathget'])->name('pathget');

Route::get('/',[FrontendController::class,'welcome'])->name('welcome');
Route::get('/productLists',[FrontendController::class,'product_lists']);

Route::get('about',[FrontendController::class,'about'])->name('about');

Route::get('contact',[FrontendController::class,'contact'])->name('contact');

Route::get('price-list',[FrontendController::class,'pricelist'])->name('pricelist');

Route::post('add_to_cart',[FrontendController::class,'add_to_cart'])->name('add_to_cart');

Route::get('order-details',[FrontendController::class,'orderdetails'])->name('orderdetails');

Route::post('order-details',[FrontendController::class,'contactsave'])->name('contactsave');

Route::post('checkout',[\App\Http\Controllers\frontend\CheckoutController::class,'checkout'])->name('checkout');



Auth::routes();

Route::middleware(['auth'])->group(function () {
	
Route::get('/home',[\App\Http\Controllers\backend\DashboardController::class,'index']);
Route::get('/category_lists',[\App\Http\Controllers\backend\CategoryController::class,'category_lists']);
Route::get('/product_lists',[\App\Http\Controllers\backend\ProductsController::class,'product_lists']);
Route::get('/banner_lists',[\App\Http\Controllers\backend\BannerController::class,'banner_lists']);
Route::post('/banner_status_update',[\App\Http\Controllers\backend\BannerController::class,'bannerstatus'])->name('banner_status_update');
Route::post('/category_status_update',[\App\Http\Controllers\backend\CategoryController::class,'statusupdate'])->name('category_status_update');

Route::resource('/category',\App\Http\Controllers\backend\CategoryController::class);
Route::resource('/products',\App\Http\Controllers\backend\ProductsController::class);
Route::resource('/banner',\App\Http\Controllers\backend\BannerController::class);
Route::resource('/customer',\App\Http\Controllers\backend\CustomersController::class);
Route::resource('/orders',\App\Http\Controllers\backend\OrdersController::class);
Route::get('/profile',[\App\Http\Controllers\backend\DashboardController::class,'profile']);
Route::get('/order_lists',[\App\Http\Controllers\backend\OrdersController::class,'order_lists']);
Route::post('/update_orderstatus/{id}',[\App\Http\Controllers\backend\OrdersController::class,'update_orderstatus'])->name('update_orderstatus');
Route::get('/customer_lists',[\App\Http\Controllers\backend\CustomersController::class,'customer_lists']);
Route::post('/profile_update',[\App\Http\Controllers\backend\DashboardController::class,'update_user']);
});