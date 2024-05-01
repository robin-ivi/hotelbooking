<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
});

Route::get('roomCategory-list', [RoomCategoryController::class, 'index']);
Route::post('store-roomCategory', [RoomCategoryController::class, 'store'])->name('store-roomCategory');
Route::get('delete-roomCategory/{id}', [RoomCategoryController::class, 'destroy'])->name('destroy-roomCategory');


Route::get('rooms', [RoomController::class, 'index']);
Route::post('store-rooms', [RoomController::class, 'store'])->name('store-rooms');
Route::get('delete-rooms/{id}', [RoomController::class, 'destroy'])->name('destroy-rooms');


Route::get('booking', [BookingController::class, 'index']);
Route::get('categories/{id}/rooms', [BookingController::class, 'getRooms']);
Route::post('store-booking', [BookingController::class, 'store'])->name('store-booking');
Route::get('booking-list', [BookingController::class, 'list']);
Route::get('delete-booking/{id}', [BookingController::class, 'destroy'])->name('destroy-booking');
Route::get('view-booking/{id}', [BookingController::class, 'view'])->name('view-booking');
Route::post('update-booking', [BookingController::class, 'update'])->name('update-booking');
Route::get('inoice-list', [BookingController::class, 'inoicelist']);
Route::get('view-invoice/{id}', [BookingController::class, 'invoiceview'])->name('view-invoice');