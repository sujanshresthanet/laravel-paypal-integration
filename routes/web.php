<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;

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
    return view('welcome');
});


// Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
// Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
// Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));


// Route::get('/paywithpaypal', [PaypalController::class, 'payWithPaypal']);
// Route::post('paypal', [PaypalController::class, 'postPaymentWithpaypal']);
// Route::get('paypal', array('as' => 'status'), [PaypalController::class, 'getPaymentStatus']);


// Route::get('paywithpaypal', 'PaypalController@payWithPaypal')->name('paywithpaypal');
// Route::post('paypal', 'PaypalController@postPaymentWithpaypal')->name('paypal');
// Route::get('paypal', 'PaypalController@getPaymentStatus')->name('status');



Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'App\Http\Controllers\PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'App\Http\Controllers\PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'App\Http\Controllers\PaypalController@getPaymentStatus',));
