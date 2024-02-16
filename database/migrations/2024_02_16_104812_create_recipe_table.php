<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipe', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_name');
            $table->string('recipe_description');
            $table->string('recipe_link')->nullable();
            $table->string('recipe_image')->nullable();
            $table->integer('views');
            $table->integer('bookmarked');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe');
    }
};
