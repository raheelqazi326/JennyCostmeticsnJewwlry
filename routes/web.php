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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Home');
Route::get('/about-us', 'AboutUs');
Route::get('/products', 'Products');
Route::get('/product', 'Product');
Route::get('/faq', 'Faq');
Route::get('/login', 'Login');
Route::get('/register', 'Register');
Route::get('/checkout', 'Checkout');
Route::get('/cart', 'Cart');
Route::get('/contact', 'Contact');
Route::get('/price-lists', 'PriceList');
Route::get('/forgot-password', 'ForgotPassword');