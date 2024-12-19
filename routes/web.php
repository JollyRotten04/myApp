<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BreakfastController;
use App\Http\Controllers\LunchController;
use App\Http\Controllers\DinnerController;

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Dashboard Route (after successful login)
Route::get('/homepage', function () {
    return view('homepage'); 
})->name('homepage');

// Register Routes
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Password Reset Routes
Route::get('/password/reset', function () {
    return view('auth.passwords.email');
})->name('password.request');

// Handle the sign-up form submission
Route::post('/signup', [RegisterController::class, 'create'])->name('signup.submit');

// Favorites Route
Route::get('/favorites', [RecipeController::class, 'showFavorites'])->name('favorites');

// Ingredients Route (Controller version)
Route::get('/ingredients', [IngredientsController::class, 'index'])->name('ingredients');

// Recipe Route (Controller version)
Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe');

// Profile Route
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');

// Breakfast Routes
Route::get('/breakfast', [BreakfastController::class, 'index'])->name('breakfast');

// Lunch Routes
Route::get('/lunch', [LunchController::class, 'index'])->name('lunch');

// Dinner Routes
Route::get('/dinner', [DinnerController::class, 'index'])->name('dinner');
