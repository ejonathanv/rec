<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;


Route::get('actualizar', function () {
    Artisan::call('migrate');
    Artisan::call('corregir-fecha');
    
    dd('Se ha actualizado la base de datos');
});

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/quienes-somos', [WebsiteController::class, 'about'])->name('about');
Route::get('/programas', [WebsiteController::class, 'programs'])->name('programs');
Route::get('/conoce-mas', [WebsiteController::class, 'knowMore'])->name('knowMore');
Route::get('/conoce-mas/{post:slug}', [WebsiteController::class, 'post'])->name('post');
Route::get('/contacto', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/contacto', [WebsiteController::class, 'contactPost'])->name('contactPost');
Route::get('politicas', [WebsiteController::class, 'policies'])->name('policies');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
    Route::redirect('/', '/admin/publicaciones')->name('admin');
    Route::resource('publicaciones', PostController::class)->names('posts')->parameters(['publicaciones' => 'post']);
    Route::get('cuenta', [ProfileController::class, 'account'])->name('account');
    Route::put('cuenta/actualizar', [ProfileController::class, 'updateAccount'])->name('update-account');
});

require __DIR__.'/auth.php';
