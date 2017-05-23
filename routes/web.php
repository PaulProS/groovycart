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

//Route::get('/', function () {
//    return view('welcome');
//});

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $parentCategories = Category::where('parent_id', '=', null)->get();

    return view('index', compact('parentCategories'));
});

Route::get('/about', function(){

    $parentCategories = Category::where('parent_id', '=', null)->get();

    return view('about', compact('parentCategories'));

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/store/{id}', 'ProductsController@category')->name('store');


Route::group(['middleware' => 'admin'], function (){

    Route::resource('admin/users', 'AdminUserController');

    Route::resource('admin/products', 'AdminProductsController');

    Route::resource('admin/categories', 'AdminCategoriesController');

});


