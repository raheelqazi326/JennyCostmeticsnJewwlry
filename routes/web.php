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
Route::get('/login', 'Login')->name('login');
Route::get('/register', 'Register');
Route::get('/checkout', 'Checkout');
Route::get('/cart', 'Cart');
Route::get('/contact', 'Contact');
Route::get('/price-lists', 'PriceList');
Route::get('/forgot-password', 'ForgotPassword');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'Login')->name('admin.login');
    });
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', 'Home')->name('admin.home');
        Route::get('category', 'Category')->name('admin.category');
        Route::get('/category/add', 'AddCategory')->name('admin.addcategory');
        Route::get('/category/{id}', 'EditCategory')->name('admin.editcategory');
        Route::get('logout', function(){
            auth('admin')->logout();
            return redirect()->route('admin.login');
        })->name('admin.logout');
    });
});