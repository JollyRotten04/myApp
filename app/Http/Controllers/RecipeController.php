<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // Method to show the recipe list
    public function index()
    {
        return view('recipe'); // This will load recipe.blade.php from resources/views/recipe.blade.php
    }

    // Method to show favorite recipes
    public function showFavorites()
    {
        // Array of favorite recipes with name, author, image, and rating
        $recipes = [
            ['name' => 'Fried Chicken', 'author' => 'Chef Antonette', 'image' => 'fried-chicken.jpg', 'rating' => '4.8'],
            ['name' => 'Bicol Express', 'author' => 'Chef Justin', 'image' => 'bicol-express.jpg', 'rating' => '4.8'],
            ['name' => 'Adobo', 'author' => 'Chef Meshe', 'image' => 'adobo.jpg', 'rating' => '4.8'],
            ['name' => 'Spaghetti', 'author' => 'Chef Leah', 'image' => 'spaghetti.jpg', 'rating' => '4.5'],
            ['name' => 'Kare-Kare', 'author' => 'Chef Bianca', 'image' => 'kare-kare.jpg', 'rating' => '4.6'],
            ['name' => 'Tapsilog', 'author' => 'Chef Samuel', 'image' => 'tapsilog.jpg', 'rating' => '4.9'],
            ['name' => 'Pancit Canton', 'author' => 'Chef Anna', 'image' => 'pancit canton.jpg', 'rating' => '4.7'],
            ['name' => 'Chocolate Lava Cake', 'author' => 'Chef Maria', 'image' => 'chocolate-lava-cake.jpg', 'rating' => '4.9'],
            ['name' => 'Arroz Caldo', 'author' => 'Chef John', 'image' => 'arroz-caldo.jpg', 'rating' => '4.8'],
            ['name' => 'Homemade Burger', 'author' => 'Chef Chris', 'image' => 'homemade-burger.jpg', 'rating' => '4.6'],
        ];

        // Pass the recipes data to the favorites view
        return view('favorites', ['recipes' => $recipes]);
    }

    public function showIngredients(Request $request)
    {
        // Retrieve the 'name' and 'image' from the query parameters
        $image = $request->query('image');
        $recipeName = $request->query('name');

        // Find the recipe by matching the 'recipe_name' in the database
        $recipe = Recipe::where('recipe_name', $recipeName)->first(); // Compare with 'recipe_name' column in the database
    
        // Pass the 'image' and 'recipe' to the view
        return view('ingredients', compact('image', 'recipe'));
    }
}