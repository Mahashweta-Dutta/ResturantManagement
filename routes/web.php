<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\ResturantController;

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

/**
 * UI Links
 */
Route::get('/add-customer'      ,[SystemController::class,'crud']);
Route::get('/view-customer'     ,[SystemController::class,'crud']);
Route::get('/edit-customer/{Id}',[SystemController::class,'crud']);

Route::group(['prefix' => 'api'], function(){  
     /** 
      * API POST link 
      */
      Route::post('/add-customer'          ,[ResturantController::class,'addCustomer']);
      Route::get('/get-all-customer'       ,[ResturantController::class,'allCustomer']);
      Route::get('/edit-customer/{Id}'     ,[ResturantController::class,'editCustomer']);
      Route::post('/update-customer/{Id}'  ,[ResturantController::class,'updateCustomer']);
      Route::get('/delete-customer/{Id}'   ,[ResturantController::class,'deleteCustomer']);
 });