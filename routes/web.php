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

Route::get('/', 'HomeController@index');
Route::get('cart', 'MedicineController@cart');
Route::resource('medicines', 'MedicineController');
Route::resource('categories', 'CategoryController');
Route::resource('users', 'UserController');

Route::middleware(['auth'])->group(function() {
    Route::get('/home', 'HomeController@index');
    
    Route::get('/medicines-admin', 'MedicineController@admin');
});
Auth::routes();
Route::post('/medicines/getDetailMedicine', 'MedicineController@getDetail')->name('medicines.getDetailMedicine');
Route::post('/addToCart', 'MedicineController@addToCart')->name('medicines.addToCart');
Route::get('/cekcart', 'MedicineController@cekcart');

//jgn dihapus lg coba"
Route::get('obatlaris', 'MedicineController@ObatTerlaris');

Route::get('reports/transactions', 'TransactionController@report');
Route::get('reports/bestselling', 'MedicineController@bestSelling');
Route::get('reports/bestpurchasing', 'TransactionController@bestPurchasing');