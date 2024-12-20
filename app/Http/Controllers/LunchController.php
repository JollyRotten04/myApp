<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class LunchController extends Controller
{
    public function showIngredients(Request $request)
    {
        // Retrieve the 'name' and 'image' from the query parameters
        $image = $request->query('image');
        $recipeName = $request->query('name');

        // dd($recipeName);


        // Find the recipe by matching the 'recipe_name' in the database
        $recipe = Recipe::where('recipe_name', $recipeName)->first(); // Compare with 'recipe_name' column in the database
    
        return view('lunch', compact('image', 'recipe'));
    }
}
