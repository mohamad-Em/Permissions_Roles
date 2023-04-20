<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

    Route::get('exportExcel',[UserController::class,'export'])->name('exportExcel');
    Route::post('importExcel',[UserController::class,'import'])->name('importExcel');
?>
