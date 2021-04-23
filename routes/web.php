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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::get('/rbigtrash', function () {
    return view('rbigtrash');
})->name('rbigtrash');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/pengguna', function () {
    return view('pengguna');
})->name('pengguna');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/masyarakat', function () {
    return view('masyarakat');
})->name('masyarakat');

Route::get('/petugas', function () {
    return view('petugas');
})->name('petugas');

Route::get('/about', function () {
    return view('about');
})->name('about');
