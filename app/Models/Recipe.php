<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;


class Recipe extends Model
{
    use HasFactory;

    // Define fillable properties (if needed)
    protected $fillable = ['name', 'ingredients', 'instructions'];
}
