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
Route::post('/logout', [AuthController::class, 'logoutrequest'])->name('logout');

Route::post('/register', [AuthController::class, 'registerrequest'])->name('register.form');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/forgotpassword', [AuthController::class, 'forgotpassword']);

Route::post('/forgotpasswordrequest', [AuthController::class, 'forgotpasswordrequest'])->name('requestpassword');

Route::post('/changepassword', [AuthController::class, 'changePassword'])->name('changepassword');



Route::get('/', [ProductController::class, 'getproduct']);
Route::get('/shop', [ProductController::class, 'shopproduct'])->name('shop');

Route::get('/cart', [CartController::class, 'Cart']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/shopdetail/{id}', [ShopDetailController::class, 'shopdetail'])->name('shop.detail');
Route::get('/testimonial', [TestimonialController::class, 'testimonial']);
Route::get('/newpassword', [NewPasswordController::class, 'newpassword']);
Route::get('/admincatalog', [AdminCatalogController::class, 'admincatalog']);
Route::get('/catalog-create', [AdminCatalogController::class, 'create_catalog']);
Route::post('/createcatalogaction', [AdminCatalogController::class, 'create_catalog_action']);
Route::post('/searchcatalog', [AdminCatalogController::class, 'search_catalog_action']);
Route::delete('/deletecatalog', [AdminCatalogController::class, 'delete_catalog_action']);
Route::get('/editcatalog/{id}', [AdminCatalogController::class, 'edit_catalog']);
Route::post('/editcatalogaction', [AdminCatalogController::class, 'edit_catalog_action']);

Route::post('/', [ShopController::class, 'addWishlist'])->name('addWishlist');
Route::get('/wishlist', [WishlistController::class, 'ShowWishlist'])->name('wishlist');
Route::post('/wishlist/add/{id_anjing}', [WishlistController::class, 'store'])->name('addWishlist');

Route::delete('/wishlist/{id_anjing}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');

Route::post('/cart', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/shop/search', [ProductController::class, 'search'])->name('shop.search');
Route::get('/dbconn', function () {
    return view('dbconn');
});