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

//Replaced with new route
Route::get('/', function(){
    return '/ route';
});

//Points the /hotels route to the index function inside HotelController
Route::get('/hotels', 'HotelController@index');

//Dashboard

Route::group(['prefix' => 'dashboard'], function() {
    Route::get('/', function(){
        return '/dashboard route';
    });
    //Point the following route reservations/create/{id} to the create function in the ReservationController
    Route::get('reservations/create/{id}', 'ReservationController@create');
});
Route::resource('reservations', 'ReservationController', ['except' => ['create']]);






