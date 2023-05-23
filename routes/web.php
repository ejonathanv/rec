<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/quienes-somos', [WebsiteController::class, 'about'])->name('about');
Route::get('/programas', [WebsiteController::class, 'programs'])->name('programs');
Route::get('/conoce-mas', [WebsiteController::class, 'knowMore'])->name('knowMore');
Route::get('/conoce-mas/{post:slug}', [WebsiteController::class, 'post'])->name('post');
Route::get('/contacto', [WebsiteController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
