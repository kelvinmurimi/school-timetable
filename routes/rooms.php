<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::prefix('rooms')->group(function () {
    Route::get('/', [RoomController::class, 'index'])->name('admin.rooms.index');
    Route::get('/create', [RoomController::class, 'create'])->name('admin.rooms.create');
    Route::post('/store', [RoomController::class, 'store'])->name('admin.rooms.store');
    Route::get('{id}/edit', [RoomController::class, 'edit'])->name('admin.rooms.edit');
    Route::put('{id}/update', [RoomController::class, 'update'])->name('admin.rooms.update');
    Route::delete('{id}/delete', [RoomController::class, 'destroy'])->name('admin.rooms.destroy');
});
