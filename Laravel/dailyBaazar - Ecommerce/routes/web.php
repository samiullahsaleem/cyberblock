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

Route::view('/account-info', 'account-edit')->middleware('auth');
Route::put('/account-info/updated', [App\Http\Controllers\AccountController::class, 'Update'] )->middleware('auth');
Route::view('/account', 'account')->middleware('guest');


Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
});

Route::get('/', [App\Http\Controllers\ProductsController::class, 'index']);
Route::view('/verify-email', 'verify-email')->middleware('auth');

Route::get('/add-to-wishlist/{id}', [App\Http\Controllers\ProductsController::class, 'addToWishlist'])->middleware('auth');
Route::get('/wishlist', [App\Http\Controllers\ProductsController::class, 'Wishlist'])->middleware('auth');
Route::get('/remove-from-wishlist/{id}', [App\Http\Controllers\ProductsController::class, 'RemoveFromWishlist'])->middleware('auth');


Route::group(['middleware' => 'is_admin'], function () {
    Route::view('/dashboard', 'admin.dashboard');
    
    //Admin Category Routes
    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::view('/create-category', 'admin.category.create-category');
    Route::post('/create-category/success', [App\Http\Controllers\CategoryController::class, 'create']);
    Route::get('/update-category/{slug}', [App\Http\Controllers\CategoryController::class, 'select']);
    Route::patch('/update-category/{slug}/success',[App\Http\Controllers\CategoryController::class, 'update']);

    //Admin Subcategory Routes
    Route::get('/subcategory', [App\Http\Controllers\SubcategoryController::class, 'index']);
    Route::view('/create-subcategory', 'admin.subcategory.create-subcategory');
    Route::post('/create-subcategory/success', [App\Http\Controllers\SubcategoryController::class, 'create']);
    Route::get('/update-subcategory/{slug}', [App\Http\Controllers\SubcategoryController::class, 'select']);
    Route::patch('/update-subcategory/{slug}/success',[App\Http\Controllers\SubcategoryController::class, 'update']);

    //Admin Product Routes
    Route::get('/products', [App\Http\Controllers\AdminProductController::class, 'index']);
    Route::view('/add-product', 'admin.product.add-product');
    Route::post('/add-product/success', [App\Http\Controllers\AdminProductController::class, 'create']);
    Route::get('/update-product/{slug}', [App\Http\Controllers\AdminProductController::class, 'select']);
    Route::patch('/update-product/{slug}/success',[App\Http\Controllers\AdminProductController::class, 'update']);
    Route::get('/delete/{slug}',[App\Http\Controllers\AdminProductController::class, 'destroy']);

    //Admin Order Routes
    Route::get('/order', [App\Http\Controllers\OrderController::class, 'index']);
    Route::get('/order/{id}', [App\Http\Controllers\OrderController::class, 'show']);

    //Admin Customer Routes
    Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index']);

    //Ajax Routes
    Route::post('/getsubcategory', [App\Http\Controllers\AjaxController::class, 'getsubcategory'] )->name('getsubcategory');

    });


Route::get('/cart', [App\Http\Controllers\ProductsController::class, 'cart']);
Route::get('/product/{id}', [App\Http\Controllers\ProductsController::class, 'product']);
Route::get('/browse-products/{slug}', [App\Http\Controllers\ProductsController::class, 'allproducts']);
Route::get('/category/{slug}', [App\Http\Controllers\ProductsController::class, 'categoryfilter']);
Route::get('/category-filter/{slug}', [App\Http\Controllers\ProductsController::class, 'categoryfilterproducts']);

Route::get('/search', [App\Http\Controllers\ProductsController::class, 'search']);
Route::get('/search-filter/{q}', [App\Http\Controllers\ProductsController::class, 'filtersearch']);



Route::get('/collection/{slug}', [App\Http\Controllers\ProductsController::class, 'subcategory']);
Route::get('/filter-collection/{slug}', [App\Http\Controllers\ProductsController::class, 'subfilterproducts']);


Route::get('/filter-products/{slug}', [App\Http\Controllers\ProductsController::class, 'filterproducts']);
Route::get('/add-to-cart/{id}', [App\Http\Controllers\ProductsController::class, 'addToCart']);
Route::get('/remove-from-cart/{id}', [App\Http\Controllers\ProductsController::class, 'remove']);
Route::patch('/update-cart', [App\Http\Controllers\ProductsController::class, 'update']);


Route::group(['middleware' => 'verified','auth'], function () {
    Route::get('/checkout', [App\Http\Controllers\ProductsController::class, 'checkout']);
    Route::post('/payfast-response', [App\Http\Controllers\ProductsController::class, 'processResponse']);
    Route::post('/checkout/success', [App\Http\Controllers\ProductsController::class, 'checkout_success']);    
    });