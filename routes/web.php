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

Route::get('/','LocalController@index')->name('home');

/* Consultar los detalles de la reservación */
Route::post('/getDetailsReservation','ReservationController@getInfo')->name('getInfo');

/* Registrar la Compañía así como la reservación */
Route::post('/registerReservation','CompanyController@register')->name('register');
