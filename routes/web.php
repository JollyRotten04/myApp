<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BreakfastController;
use App\Http\Controllers\LunchController;
use App\Http\Controllers\DinnerController;

// Login Routes
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);

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

// In routes/web.php
Route::get('/ingredients', [RecipeController::class, 'showIngredients'])->name('ingredients');

// Recipe Route (Controller version)
Route::get('/recipe', [RecipeController::class, 'showFavorites'])->name('recipe');

// Profile Route
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');

// Breakfast Routes
Route::get('/breakfast', [BreakfastController::class, 'showIngredients'])->name('breakfast');

// Lunch Routes
Route::get('/lunch', [LunchController::class, 'showIngredients'])->name('lunch');

// Dinner Routes
Route::get('/dinner', [DinnerController::class, 'showIngredients'])->name('dinner');

Route::get('/privacy-policy', function () {
    return view('PrivacyPolicy');
})->name('privacyPolicy');

Route::get('/user-agreement', function () {
    return view('UserAgreement');
})->name('userAgreement');

Route::get('/our-values', function () {
    return view('OurValues');
})->name('ourValues');
