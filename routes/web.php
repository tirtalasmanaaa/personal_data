<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personalController;


Route::get('/form', function () {
    return view('formPersonalData');
});


Route::get('/', [personalController::class, 'index'])->name('dasboard');
Route::get('/listData', [personalController::class, 'create'])->name('listData');
Route::post('/prosesInput', [personalController::class, 'store'])->name('prosesInput');

