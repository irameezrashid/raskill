<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;
use App\Http\Controllers\Iti;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| All web routes are defined here.
| We group them by "site" and "admin" to keep things organized.
|
*/


// ---------------- Site Routes ----------------
Route::prefix('/')->name('site.')->group(function () {
    Route::get('/', [Site\HomeController::class, 'index'])->name('index');
    Route::get('/directory', [Site\DirectoryController::class, 'index'])->name('directory');
    Route::get('/grievance', [Site\GrievanceController::class, 'index'])->name('grievance');
    Route::get('/faq', [Site\FaqController::class, 'index'])->name('faq');
    Route::get('/rti', [Site\RtiController::class, 'index'])->name('rti');
    Route::get('/citizen-charter', [Site\CitizenCharterController::class, 'index'])->name('citizen-charter');
    Route::get('/announcements', [Site\AnnouncementController::class, 'index'])->name('announcements');

});



/*
|--------------------------------------------------------------------------
| ITI Routes
|--------------------------------------------------------------------------
*/
Route::prefix('iti')->name('iti.')->group(function () {
    Route::get('/registrations', [Iti\RegistrationController::class, 'index'])->name('registrations');
     Route::get('/registrations/{trade}', [Iti\RegistrationController::class, 'show'])->name('registration.show');
     Route::get('/registrations/{trade}/add', [Iti\RegistrationController::class, 'add'])->name('registration.add');
     Route::post('/registrations/finalize/{type}', [RegistrationController::class, 'finalize'])->name('iti.registration.finalize');


});
// Route::prefix('iti')->name('iti.')->group(function () {
//     Route::get('/registrations', [App\Http\Controllers\ITI\RegistrationController::class, 'index'])->name('registration.index');
//     Route::get('/registrations/{trade}', [App\Http\Controllers\ITI\RegistrationController::class, 'show'])->name('registration.show');
//     Route::get('/registrations/{trade}/create', [App\Http\Controllers\ITI\RegistrationController::class, 'create'])->name('registration.create');
// });






