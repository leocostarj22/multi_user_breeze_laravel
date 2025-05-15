<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Rota pública da loja
Route::get('/', function () {
    return view('loja.app');
})->name('loja.app');

// Rotas autenticadas
Route::middleware(['auth', 'verified'])->group(function () {
    // Redireciona usuários autenticados para a loja
    Route::get('/dashboard', function () {
        return redirect()->route('loja.app');
    })->name('dashboard');

    // Rotas de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
