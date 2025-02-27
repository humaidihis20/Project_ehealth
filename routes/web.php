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

Route::get('/', 'HomeKesehatanController@index');

Route::get('/infohidupsehat', 'KesehatanController@index');

Route::get('/nutrisi_makanan', 'NutrisiMakananController@nutrisiMakanan');

Route::get('/infokesehatanterbaru', 'KesehatanTerbaruController@index');

Route::get('/gejalapenyakit', 'GejalaPenyakitController@index');

Route::get('/caramengatasi', 'CaraMengatasiPenyakitController@index');

Route::get('/infoobat', 'InfoObatController@index');

Route::get('/detailobat', 'DetailObatController@index');

// Route::get('/login', 'LoginController@index')->name('login');
// Route::post('/login', 'LoginController@cekLogin')->name('login.cekLogin');
?>
