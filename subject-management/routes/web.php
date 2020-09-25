<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('grades', [GradesController::class]);
Route::get('register', function () {
    return view('register');
});
Auth::routes();


