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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('experts','UserController@expertsview')->name('experts');
Route::get('contact','UserController@contactview')->name('contact');
Route::get('membership','UserController@membershipview')->name('membership');
Route::get('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
Route::get('product','Admin\ProductController@display');

// Route::get('/experts', [UserController::class, 'expertsview']);
// Route::get('/contact', [UserController::class, 'contactview']);
// Route::get('/product', [UserController::class, 'productsview']);
// Route::get('/membership', [UserController::class, 'membershipview']);


//ADMIN

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        //login routes
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');

    });
    Route::middleware('admin')->group(function(){
        Route::get('dashboard','HomeController@index')->name('dashboard');
        Route::get('add_product','ProductController@addproduct');
        Route::post('add_product','ProductController@storeproduct')->name('add_product');
        Route::get('adminproduct','ProductController@adminproduct');
        Route::get('update_product/{id}','ProductController@editproduct');
        //Route::put('updateimage/{id}','ProductController@update');
        Route::post('updateimage/{id}','ProductController@update');
        Route::get('deleteimage/{id}','ProductController@delete');
        
    });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
       



});