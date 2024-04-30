<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomCategoryController;


Route::get('/', function () {
    return view('auth/login');
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

Route::get('roomCategory-list', [RoomCategoryController::class, 'index']);
Route::post('store-roomCategory', [RoomCategoryController::class, 'store'])->name('store-roomCategory');
Route::get('delete-roomCategory/{id}', [RoomCategoryController::class, 'destroy'])->name('destroy-roomCategory');