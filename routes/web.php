<?php

use App\Http\Controllers\PackingSlipController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PackingSlipController::class, 'index'])->name('Packingslip.form');
//Route::put('/', [PackingSlipController::class, 'submitForm'])->name('Packingslip.submitForm');


Route::put('/', [PackingSlipController::class, 'submitForm'])->name('Packingslip.submitForm');
