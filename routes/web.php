<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForgotPassowrdController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopDetailController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\AdminCatalogController;
Route::get('/', function () {
    return view('index');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginrequest']); 
Route::post('/logout', [AuthController::class, 'logoutrequest'])->name('logout');;
Route::post('/register', [AuthController::class, 'registerrequest'])->name('register.form');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/forgotpassword', [AuthController::class, 'forgotpassword']);

Route::get('/', [ProductController::class, 'getproduct']);
Route::get('/shop', [ProductController::class, 'shopproduct']);

Route::get('/cart', [CartController::class, 'Cart']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/contact', [ContactController::class, 'contact']);



Route::get('/shopdetail', [ShopDetailController::class, 'shopdetail']);
Route::get('/testimonial', [TestimonialController::class, 'testimonial']);
Route::get('/wishlist', [WishlistController::class, 'wishlist']);
Route::get('/newpassword', [NewPasswordController::class, 'newpassword']);
Route::get('/adminhome', [AdminHomeController::class, 'adminhome']);
Route::get('/admincatalog', [AdminCatalogController::class, 'admincatalog']);

Route::get('/dbconn', function(){
    return view('dbconn');
});