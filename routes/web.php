<?php

use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
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
