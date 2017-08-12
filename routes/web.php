<?php

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

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('index');
Route::get('mail', 'PagesController@getEmailForm');
Route::post('sendEmail', 'PagesController@sendEmail');
Route::post('subscribeMail', 'PagesController@subscribeMail');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/store/{catId}', 'StoreController@store')->name('store');
Route::get('/product/{productId}', 'StoreController@viewProduct')->name('product');
Route::get('/search', 'StoreController@getSearch')->name('search');
Route::get('/review/{productId}/{userId}', 'StoreController@review')->name('review');
Route::get('/add-to-cart/{productId}', 'StoreController@addToCart')->name('addCart');
Route::get('/cart', 'StoreController@getCart')->name('cart');
Route::get('/emptyCart', 'StoreController@emptyCart')->name('emptyCart');
Route::get('/deleteCartItem/{id}', 'StoreController@deleteCartItem')->name('deleteCartItem');
Route::get('decreaseByOne/{id}', 'StoreController@decreaseByOne');
Route::get('increaseByOne/{id}', 'StoreController@increaseByOne');

Route::group(['middleware' => 'admin'], function (){
    Route::resource('admin/users', 'AdminUserController');
    Route::resource('admin/products', 'AdminProductsController');
    Route::get('featured', 'AdminProductsController@setFeatured');
    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::resource('admin/brands', 'AdminBrandsController');
    Route::resource('admin/reviews', 'AdminReviewController');
    Route::get('approve/{id}', 'AdminReviewController@approve')->name('approve');
});

Auth::routes();