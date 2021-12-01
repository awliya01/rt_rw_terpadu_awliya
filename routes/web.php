<?php

use App\Rt;
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
    return view('layouts.app');
})->name('dashboard');

// Routes Users
Route::get('/register', 'AuthController@register');
Route::post('/postregister','AuthController@postregister');
Route::get('/login','AuthController@login');
Route::post('/postlogin','AuthController@postlogin');

// Routes RT
Route::get('/rt','RtController@index');
Route::get('/rt/create','RtController@create');
Route::post('/rt','RtController@store');
Route::get('/rt/{id}','RtController@edit');
Route::put('/rt/{id}','RtController@update');
Route::delete('rt/{id}','RtController@destroy' );

// Routes RW
Route::get('/rw','RwController@index');
Route::get('/rw/create','RwController@create');
Route::post('/rw','RwController@store');
Route::get('rw/{id}','RwController@edit');
Route::put('/rw/{id}','RwController@update');
Route::delete('/rw/{id}','RwController@destroy');

//Route Kelurahan
Route::get('/kelurahan','KelurahanController@index');
Route::get('/kelurahan/create','KelurahanController@create');
Route::post('/kelurahan','KelurahanController@store');
Route::get('/kelurahan/{id}','KelurahanController@edit');
Route::put('/kelurahan/{id}','KelurahanController@update');
Route::delete('/kelurahan/{id}','KelurahanController@destroy');

//Route Kecamatan
Route::get('/kecamatan','KecamatanController@index');
Route::get('/kecamatan/create','KecamatanController@create');
Route::post('/kecamatan','KecamatanController@store');
Route::get('/kecamatan/{id}','KecamatanController@edit');
Route::put('/kecamatan/{id}','KecamatanController@update');
Route::delete('/kecamatan/{id}','KecamatanController@destroy');

//Route Penduduk
Route::get('/penduduk','DataPendudukController@index')->name('penduduk.index');
Route::get('/penduduk/edit/{id}','DataPendudukController@edit');
Route::get('/penduduk/{id}','DataPendudukController@show')->name('penduduk.show');
Route::put('/penduduk/{id}','DataPendudukController@update');
Route::delete('/penduduk','DataPendudukController@destroy');

//Route Petugas
Route::get('/petugas','PetugasController@index');
Route::get('/petugas/create','PetugasController@create');
Route::put('/petugas/{id}','PetugasController@update');
Route::delete('/penduduk', 'PendudukController@destroy');

