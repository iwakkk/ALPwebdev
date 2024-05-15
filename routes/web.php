<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('index');
});


Route::get('/cart', [CartController::class, 'Cart']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/forgotpassword', [ForgotPassowrdController::class, 'forgotpassword']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/shopdetail', [ShopDetailController::class, 'shopdetail']);
Route::get('/shop', [ShopController::class, 'shop']);
Route::get('/testimonial', [TestimonialController::class, 'testimonial']);
Route::get('/wishlist', [WishlistController::class, 'wishlist']);
Route::get('/newpassword', [NewPasswordController::class, 'newpassword']);