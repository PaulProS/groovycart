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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('mail', function(){
    return view('mail');
});

Route::post('sendEmail', function(Request $request){
    $data = array(

        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'messageBody' => $request->message

    );
    Mail::send('emails.contact', $data, function ($message) use ($data){
        $message->from($data['email']);
        $message->to('iamlearning13@gmail.com');
        $message->subject($data['subject']);
    });
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/store/{id}', 'StoreController@category')->name('store');
Route::get('/product/{id}', 'StoreController@viewProduct')->name('product');
Route::get('/search', 'StoreController@getSearch')->name('search');
Route::get('/review/{prodId}/{userId}', 'StoreController@review')->name('review');
Route::get('/filter', 'StoreController@filter')->name('filter');
Route::get('/add-to-cart/{id}', 'StoreController@addToCart')->name('addCart');
Route::get('/cart', 'StoreController@getCart')->name('cart');
Route::get('/emptyCart', 'StoreController@emptyCart')->name('emptyCart');
Route::get('/deleteCartItem/{id}', 'StoreController@deleteCartItem')->name('deleteCartItem');

Route::group(['middleware' => 'admin'], function (){
    Route::resource('admin/users', 'AdminUserController');
    Route::resource('admin/products', 'AdminProductsController');
    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::resource('admin/brands', 'AdminBrandsController');
});

Auth::routes();