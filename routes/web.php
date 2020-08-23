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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'Dashboard@index');
Route::post('/update-profile', 'Dashboard@update_profile');

//Listing Routes
Route::get('/listings', 'Listings@index');
Route::get('/new-listing', 'Listings@new_listing');
Route::post('/add-new-listing', 'Listings@add_new_listing');
Route::get('/edit-listing/{id}', 'Listings@edit_listing');
Route::post('/update-listing/{id}', 'Listings@update_listing');
Route::get('/delete-listing/{id}', 'Listings@delete_listing');

