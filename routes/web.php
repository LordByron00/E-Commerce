<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupabaseController;

Route::get('/users', [SupabaseController::class, 'getUsers']);
Route::post('/users', [SupabaseController::class, 'addUser']);
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
