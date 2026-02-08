<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

// Page publique d'accueil (landing page)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pages publiques
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact'); // <- GET pour afficher le formulaire

// Routes POST (traitement des formulaires)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); // <- POST pour soumettre
//Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Tableau de bord (protégé)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes de profil (déjà incluses par Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentification (déjà inclus par Breeze)
require __DIR__.'/auth.php';