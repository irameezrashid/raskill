<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| All web routes are defined here.
| We group them by "site" and "admin" to keep things organized.
|
*/

// ---------------- Site Routes ----------------
Route::name('site.')->group(function () {
    Route::get('/', [SiteController::class, 'index'])->name('index');
    Route::get('/directory', [DirectoryController::class, 'index'])->name('directory');
});

