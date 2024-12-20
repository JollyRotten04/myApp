<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_name')->unique(); // Product name (ensuring uniqueness)
            $table->text('recipe_description'); // Recipe description (text type for longer content)
            $table->text('recipe_instructions'); // Recipe instructions (text type for longer content)
            $table->text('recipe_ingredients'); // Recipe ingredients (text type for longer content)
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
