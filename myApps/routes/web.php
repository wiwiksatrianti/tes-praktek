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

// Route::get('/', function () {
//     return view('tes_praktek.index');
// });


Route::get('/nomor1', function () {
    return view('tes_logic.nomor1');
});

Route::get('/', 'InventoryController@form');
Route::get('/slip', 'InventoryController@slip');
Route::post('/slip', 'InventoryController@slip_post');


// Route::resource('/', 'TransaksiController');
