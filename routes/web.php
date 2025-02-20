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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
