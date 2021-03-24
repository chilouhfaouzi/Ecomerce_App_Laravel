<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/home', [ProductController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/* ----Cart Rootes ---*/
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart-ajouter', [CartController::class, 'store'])->name('cart-store');
Route::delete('/cartdelete/{rowId}', [CartController::class, 'destroy'])->name('cartdestroy');
Route::get('/clearcart', function () {
    Cart::destroy();
    return view('cart');
})->name('clearcart');

/* ----- Authentification Roots -------*/
Route::get('/sign', function () {
    return view('sign');
})->name('sign');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/* --- Products Roots --- */

Route::get('/items_cats', [CategoryProductController::class, 'index'])->name('items_cats');
Route::post('/items_cats', [CategoryProductController::class, 'index'])->name('items');

Route::get('/product/{prd_id}', [ProductController::class, 'show'])->name('product');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');




Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/orders', function () {
    return view('orders');
})->name('orders');

/*  ------- Account Rootes ----*/
Route::get('/profile-edit', function () {
    return view('edit_account');
})->middleware('auth')->name('edit_account');

Route::post('/profile-edit', [AccountController::class, 'store'])->name('profile-edit');

Route::get('/myaccount', function () {
    return view('myaccount');
})->middleware('auth')->name('myaccount');