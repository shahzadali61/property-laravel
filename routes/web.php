<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('applicants', function () {
    return view('admin.applicants');
})->name('applicants');
Route::get('add-applicant', function () {
    return view('admin.add-application');
})->name('add-applicant');
Route::get('personal-detail', function () {
    return view('admin.more-personal-information');
})->name('personal-detail');
Route::get('personal-detail-part-2', function () {
    return view('admin.more-personal-information-part2');
})->name('personal-detail-part-2');
Route::get('search-criteria', function () {
    return view('admin.search-criteria');
})->name('search-criteria');
Route::get('internal-info', function () {
    return view('admin.internal-info');
})->name('internal-info');
Route::get('weblogin', function () {
    return view('admin.weblogin');
})->name('weblogin');
Route::get('attachments', function () {
    return view('admin.attachments');
})->name('attachments');
Route::get('communication', function () {
    return view('admin.communication');
})->name('communication');
Route::get('summary', function () {
    return view('admin.summary');
})->name('summary');
Route::get('matching-properties', function () {
    return view('admin.matching-properties');
})->name('matching-properties');
Route::get('viewing', function () {
    return view('admin.viewing');
})->name('viewing');
Route::get('offers', function () {
    return view('admin.offers');
})->name('offers');
Route::get('personal-info', function () {
    return view('admin.personal-info');
})->name('personal-info');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
