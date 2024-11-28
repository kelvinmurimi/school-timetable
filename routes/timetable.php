<?php

use App\Http\Controllers\TimetableController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::prefix('timetable')->group(function () {
    Route::get('/', [TimetableController::class, 'index'])->name('admin.timetable.index');
    Route::get('/create', [TimetableController::class, 'create'])->name('admin.timetable.create');
    Route::post('/store', [TimetableController::class, 'store'])->name('admin.timetable.store');
    Route::get('{id}/edit', [TimetableController::class, 'edit'])->name('admin.timetable.edit');
    Route::put('{id}/update', [TimetableController::class, 'update'])->name('admin.timetable.update');
    Route::delete('{id}/delete', [TimetableController::class, 'destroy'])->name('admin.timetable.destroy');
});
