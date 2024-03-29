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

Route::get('/', 'CustomerController@index');
Route::resource('customers','CustomerController');
Route::resource('loans','LoanController');

Route::get('/customer/pdf','CustomerController@export_pdf');
