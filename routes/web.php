<?php

use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get("/sell/certificate/list",[\App\Http\Controllers\User\SellCertificateController::class,'index'])->name('certificate.index');
Route::post("/sell/certificate/store",[\App\Http\Controllers\User\SellCertificateController::class,'store'])->name('certificate.store');
Route::post("/sell/certificate/destroy",[\App\Http\Controllers\User\SellCertificateController::class,'destroy'])->name('certificate.destroy');
Route::get("/sell/certificate/{certificate}/edit",[\App\Http\Controllers\User\SellCertificateController::class,'edit'])->name('certificate.edit');
Route::get("/sell/certificate/{certificate}/detail",[\App\Http\Controllers\User\SellCertificateController::class,'show'])->name('certificate.show');
Route::get("/sell/certificate/create",[\App\Http\Controllers\User\SellCertificateController::class,'create'])->name('certificate.create');
//route for download
Route::get("/sell/certificate/{certificate}/download",\App\Http\Controllers\User\SellCertificateDownloadController::class)->name('certificate.download');
//personnal data
Route::get('/user/personal-data',[\App\Http\Controllers\User\PersonalDataController::class,'index'])->name('user.personal_data');
Route::post('/user/personal-data',[\App\Http\Controllers\User\PersonalDataController::class,'store'])->name('user.personal_data');
Route::get('/pdf', function (){
    return SnappyPdf::loadView('pdf')
        ->setOption('dpi',90)
//        ->setOption('grayscale',true)
        ->inline('document.pdf');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
