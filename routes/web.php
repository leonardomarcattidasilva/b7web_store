<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index');
});



require __DIR__ . '/auth.php';
