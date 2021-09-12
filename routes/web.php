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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    echo "Selamat Datang";
});
Route::get('/about', function () {
    echo "Nama : Erina Seviyanti<br>";
    echo "NIM : 2031710012";
});
Route::get('/articel/{id}', function ($id) {
    echo "Halaman articel " . $id;
});
