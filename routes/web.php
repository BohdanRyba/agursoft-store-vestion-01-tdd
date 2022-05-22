<?php

use App\Http\Controllers\ConcertOrdersController;
use App\Http\Controllers\ConcertsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [HomeController::class, 'showProduct'])->name('showProduct');
Route::get('/test', [HomeController::class, 'createProduct'])->name('createProduct');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/cart/{rowId}/add', [HomeController::class, 'addProductToCart'])->name('cart.add');
Route::post('/cart/{rowId}/update', [HomeController::class, 'updateProductInCart'])->name('cart.update');
Route::post('/cart/{rowId}/delete', [HomeController::class, 'removeProductFromCart'])->name('cart.remove');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/checkout/shipping', [HomeController::class, 'updateShippingAddress'])->name('cart.shipping');
Route::post('/checkout/billing', [HomeController::class, 'updateBillingAddress'])->name('cart.billing');

Route::get('/concerts/{id}', [ConcertsController::class, 'show']);
Route::post('/concerts/{id}/orders', [ConcertOrdersController::class, 'store']);
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

