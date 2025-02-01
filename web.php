<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahSakitController;

Route::get('/rumahsakit', [RumahSakitController::class, 'index'])->name('rumahsakit.index');


