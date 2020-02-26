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

//Get route hotels that returns the message /hotels route
Route::get('hotels', function(){
    return '/hotels route';
});

//Create a group of routes prefixed with reservations
Route::prefix('reservations')->group(function () {
    //Get Routes
    Route::get('/', function () {
        return 'Showing users homepage';
    });
    Route::get('reservations', function () {
        return 'Showing users reservations';
    });
    Route::get('reservations/new', function () {
        return 'Showing form to create reservations';
    });
    Route::get('reservations/{id}', function () {
        return 'Showing reservation id';
    });
    Route::get('reservations/{id}/edit', function () {
        return 'Showing edit form for reservation id';
    });
    //Post routes
    Route::post('reservations', function () {
        return 'Creating reservation';
    });
    //Put requests
    Route::put('reservations/{id}', function () {
        return 'Updating reservation id';
    });
    //Delete requests
    Route::delete('reservations/{id}', function () {
        return 'Deleting reservation id';
    });
});







