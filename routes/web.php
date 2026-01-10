<?php

use App\Http\Controllers\AddRowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('create');
});
Route::post('/store', [AddRowController::class, 'store'])->name('store');
