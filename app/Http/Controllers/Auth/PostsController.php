<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Models\Category;

class PostsController extends Controller
{
    public function input(Request $request)
    {
        $recipe = new Recipe;
        $recipe->recipe_name = $request->recipe_name;
        $recipe->recipe_description = $request->recipe_description;
        $recipe->recipe_category = $request->recipe_category;
        $recipe->recipe_ingredients = $request->recipe_ingredients;
        $recipe->recipe_steps = $request->recipe_steps;
        $recipe->save();
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        return view('auth.dashboard');
    }

    public function recipe_view()
    {
        return view('auth.recipe');
    }


    // In your controller method where you retrieve recipes
    public function getBreakfastRecipes()
    {
        $category = Category::where('name', 'breakfast')->first();

        if (!$category) {
            // Handle the case where the "breakfast" category doesn't exist
            // or has not been defined yet
            return redirect()->back()->with('error', 'The breakfast category does not exist.');
        }

        // Retrieve recipes specifically for the "breakfast" category
        $recipes = Recipe::where('recipe_category', $category->id)->get();

        // Pass the retrieved recipes to the view
        return view('auth.dashboard', compact('recipes'));
    }




}
