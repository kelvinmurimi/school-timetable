<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::prefix('subjects')->group(function () {
    Route::get('/', [SubjectController::class, 'index'])->name('admin.subjects.index');
    Route::get('/create', [SubjectController::class, 'create'])->name('admin.subjects.create');
    Route::post('/store', [SubjectController::class, 'store'])->name('admin.subjects.store');
    Route::get('{id}/edit', [SubjectController::class, 'edit'])->name('admin.subjects.edit');
    Route::put('{id}/update', [SubjectController::class, 'update'])->name('admin.subjects.update');
    Route::delete('{id}/delete', [SubjectController::class, 'destroy'])->name('admin.subjects.destroy');
});
