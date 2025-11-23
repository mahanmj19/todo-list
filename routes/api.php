<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/{task}', [TaskController::class, 'show'])->name('tasks.show');
    Route::post('/', [TaskController::class, 'store'])->name('tasks.store');
    Route::patch('/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::patch('/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');
});

