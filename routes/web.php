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
    return view('layout.master');
});

Route::get('/dosen/data_pengampu', function () {
    return view('pengampu');
})->name('data_pengampu');

Route::get('/profil-dosen', function () {
    return view('profil-dosen', ['content' => 'Profil Dosen']);
})->name('profil-dosen');