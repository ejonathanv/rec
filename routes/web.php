<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;


Route::get('actualizar', function () {
    Artisan::call('migrate --force');
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
    Route::get('articulos-pdf', [AdminController::class, 'pdfArticles'])->name('pdf-articles');
    Route::get('articulos-pdf/create', [AdminController::class, 'pdfArticlesCreate'])->name('pdf-articles-create');
    Route::get('articulos-pdf/{article:slug}', [AdminController::class, 'pdfArticlesShow'])->name('pdf-articles-show');
    Route::post('articulos-pdf', [AdminController::class, 'pdfArticlesStore'])->name('pdf-articles-store');
    Route::put('articulos-pdf/{article:slug}', [AdminController::class, 'pdfArticlesUpdate'])->name('pdf-articles-update');
    Route::delete('articulos-pdf/{article:slug}', [AdminController::class, 'pdfArticlesDestroy'])->name('pdf-articles-destroy');
});

require __DIR__.'/auth.php';
