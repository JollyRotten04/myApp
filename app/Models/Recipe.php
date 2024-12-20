<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    // Define fillable properties
    protected $fillable = ['recipe_name', 'recipe_description', 'recipe_instructions', 'recipe_ingredients'];
}

