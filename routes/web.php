<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jamu;
use App\Http\Controllers\JamuController;
use app\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/produk', function () {
    return view('jamus');
});
//Route::get('/jamus/{id}', function () {
    //return view('jamus-show');
//});
Route::get('/', function () {
    return view('home');
});
Route::get('/jamus/{id}', 'JamuController@show')->name('jamus-show');
//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/produk', 'JamuController@index')->name('jamus.index');






