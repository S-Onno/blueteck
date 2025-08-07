<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;

Route::get('/apply', [ApplicantController::class, 'create'])->name('apply');
// Route::get('/apply', [ApplicantController::class, 'create'])->name('applicants.create');
Route::post('/applicants/confirm', [ApplicantController::class, 'confirm'])->name('applicants.confirm');
Route::post('/applicants/store', [ApplicantController::class, 'store'])->name('applicants.store');

Route::get('/', function () {
    return view('index');
});

Route::get('/rinen', function () {
    return view('rinen');
});

Route::get('/enkaku', function () {
    return view('enkaku');
});

Route::get('/other', function () {
    return view('other');
});

