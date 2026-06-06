<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;

route::get('/', function () {
    return view('welcome');
});



Route::resource('fakultas', FakultasController::class);
Route::resource('prodi', ProdiController::class);
