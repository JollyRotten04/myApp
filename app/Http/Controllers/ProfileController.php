<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $recipes = Recipe::all(); // Fetch the recipes
        return view('profile', compact('recipes'));
    }
}
