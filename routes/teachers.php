<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('admin.teachers.index');
    Route::get('/create', [TeacherController::class, 'create'])->name('admin.teachers.create');
    Route::post('/store', [TeacherController::class, 'store'])->name('admin.teachers.store');
    Route::get('{id}/edit', [TeacherController::class, 'edit'])->name('admin.teachers.edit');
    Route::put('{id}/update', [TeacherController::class, 'update'])->name('admin.teachers.update');
    Route::delete('{id}/delete', [TeacherController::class, 'destroy'])->name('admin.teachers.destroy');
});
