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

Route::get('/', 'Home')->name('home');
Route::get('/about-us', 'AboutUs')->name('aboutus');
Route::get('/products', 'Products')->name('products');
Route::get('/product/{id}', 'Product')->name('product');
Route::get('/faq', 'Faq')->name('faq');
Route::get('/checkout', 'Checkout')->name('checkout');
Route::get('/cart', 'Cart')->name('cart');
Route::get('/contact', 'Contact')->name('contact');
Route::get('/price-lists', 'PriceList')->name('pricellist');
Route::get('/logout', function(){
    auth()->logout();
    return redirect()->route('home');
})->name('logout');
Route::get('/my-account', 'Contact')->name('my-account');
Route::group(['middleware' => 'guest'], function () {
    Route::get('Verfication/{email}/{code}', ['App\Http\Controllers\GeneralController', 'verify'])->name('verify');
    Route::get('/login', 'Login')->name('login');
    Route::get('/register', 'Register')->name('register');
    Route::get('/forgot-password', 'ForgotPassword')->name('forgot.password');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'Login')->name('admin.login');
    });
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', 'Home')->name('admin.home');
        // Category
        Route::get('category', 'Category')->name('admin.category');
        Route::get('/category/add', 'AddCategory')->name('admin.addcategory');
        Route::get('/category/{id}', 'EditCategory')->name('admin.editcategory');
        // Product
        Route::get('product', 'product\Show')->name('admin.product');
        Route::get('/product/add', 'product\Add')->name('admin.addproduct');
        Route::get('/product/{id}', 'product\Edit')->name('admin.editproduct');
        
        Route::get('logout', function(){
            auth('admin')->logout();
            return redirect()->route('admin.login');
        })->name('admin.logout');
    });
});