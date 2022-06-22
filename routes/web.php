<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index');
Route::resource('medicines', 'MedicineController');
Route::resource('categories', 'CategoryController');
Route::get('/home', 'HomeController@index');
Auth::routes();
Route::post('/medicines/getDetailMedicine', 'MedicineController@getDetail')->name('medicines.getDetailMedicine');
Route::get('/medicines/getMedicineByCategory/{id}/{name}', 'MedicineController@getMedicineByCategory')->name('medicines.getMedicineByCategory');
Route::get('/medicines/getMedicineByKeyword/{keyword}', 'MedicineController@getMedicineByKeyword')->name('medicines.getMedicineByKeyword');
Route::get("about", function(){
    return view("about.index");
 });

Route::middleware(['auth'])->group(function() {
    Route::post('/addToCart', 'MedicineController@addToCart')->name('medicines.addToCart');
    Route::post('/medicines/updateCart', 'MedicineController@updateCart')->name('medicines.updateCart');
    Route::get('reports/transactions', 'TransactionController@report');
    Route::get('reports/bestselling', 'MedicineController@bestSelling');
    Route::get('reports/bestpurchasing', 'TransactionController@bestPurchasing');
    Route::resource('transactions', 'TransactionController');
    Route::resource('address', 'AddressController');
    Route::get('address/changeAddress/{id}', 'AddressController@changeAddress');
    Route::resource('users', 'UserController');
    Route::get('cart', 'MedicineController@cart');
});
