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
Route::resource('medicines', 'MedicineController');
Route::resource('categories', 'CategoryController');

Route::middleware(['auth'])->group(function() {
    Route::get('/home', 'HomeController@index');
    
    Route::get('/medicines/admin', 'MedicineController@admin');
    Route::post('/medicines/getDetailMedicine', 'MedicineController@getDetail')->name('medicines.getDetailMedicine');
    Route::get('/addToCart', 'MedicineController@addToCart');
});
Auth::routes();

//jgn dihapus lg coba"
Route::get('obatlaris', 'MedicineController@ObatTerlaris');

Route::get('reports/transactions', 'TransactionController@report');
Route::get('reports/bestselling', 'TransactionController@report');
Route::get('reports/bestpurchasing', 'TransactionController@report');