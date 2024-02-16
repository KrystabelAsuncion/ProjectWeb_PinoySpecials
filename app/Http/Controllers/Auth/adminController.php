<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\YtLink;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Category;

class adminController extends Controller
{
    public function input(Request $request)
    {
        $request->validate([
            'recipe_name' => 'required|max:255',
            'recipe_description' => 'required|max:255',
            'recipe_category' => 'required|in:breakfast,lunch,dinner',
            'recipe_ingredients' => 'required',
            'recipe_steps' => 'required|max:255',
            'recipe_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'recipe_link' => 'required'
        ]);

        // Find or create the category
        $category = Category::firstOrCreate(['name' => $request->input('recipe_category')]);

        // Store the image file
        $filename = time().'.'.$request->recipe_image->extension();
        $request->recipe_image->storeAs('public/images', $filename);

        $recipeIngredients = explode("\n", $request->input('recipe_ingredients'));

        // Create a new Recipe instance and associate it with the category
        $recipe = new Recipe;
        $recipe->recipe_name = $request->input('recipe_name');
        $recipe->recipe_description = $request->input('recipe_description');
        $recipe->recipe_ingredients = $request->input('recipe_ingredients');
        $recipe->recipe_steps = $request->input('recipe_steps');
        $recipe->recipe_link = $request->input('recipe_link');
        $recipe->recipe_image = $filename;

        Ytlink::create([
            'recipe' => $recipe->recipe_name,
            'link' =>$request->input('recipe_link')
        ]);

        // Associate the recipe with the category
        $recipe->category()->associate($category);

        // Save the recipe
        $recipe->save();

        // Redirect back to dashboard with success message
        return redirect()->route('admin.dashboard')->with('status', 'success');
    }



    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function posts()
    {
        $recipes = Recipe::all();
        $users = User::all();

        return view('admin.dashboard', compact('recipes','users'));
    }
}
