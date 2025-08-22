<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;



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
    Route::get('/', [Site\HomeController::class, 'index'])->name('index');
    Route::get('/directory', [Site\DirectoryController::class, 'index'])->name('directory');
    Route::get('/grievance', [Site\GrievanceController::class, 'index'])->name('grievance');
    Route::get('/faq', [Site\FaqController::class, 'index'])->name('faq');
    Route::get('/rti', [Site\RtiController::class, 'index'])->name('rti');
    Route::get('/citizen-charter', [Site\CitizenCharterController::class, 'index'])->name('citizen-charter');
    Route::get('/announcements', [Site\AnnouncementController::class, 'index'])->name('announcements');
});







// // ---------------- Admin Routes ----------------
// Route::prefix('admin')->name('admin.')->group(function () {
//     //Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // admin.dashboard
//     // Add more admin routes here
// });
