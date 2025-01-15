<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/program', function () {
    return view('program'); // The view name corresponds to program.blade.php
})->name('program');
Route::get('/contact', function () {
    return view('contact'); // The view name corresponds to program.blade.php
})->name('contact');