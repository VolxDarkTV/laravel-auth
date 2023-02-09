<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Add Controller
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectController;


// Guest Pages
Route::get('/', [MainController::class, 'home']) 
    -> name('guestHome');

Route::get('/portfolio', [ProjectController::class, 'portfolio']) 
    -> name('guest.portfolio');

// Show
Route::get('/project/show{project}', [ProjectController::class, 'projectShow'])
    -> name('project.show');


// Logged Pages

// Create
Route::get('/project/create', [ProjectController::class, 'projectCreate'])->middleware(['auth', 'verified'])
    -> name('project.create');

// Store
Route::post('/project/store', [ProjectController::class, 'projectStore'])->middleware(['auth', 'verified'])
    -> name('project.store');

// Delete
Route::get('/project/delete{project}', [ProjectController::class, 'projectDelete'])->middleware(['auth', 'verified'])
-> name('project.delete');


Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
