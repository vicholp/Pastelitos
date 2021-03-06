<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

use App\Models\Ingredient;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::get();
        return view('admin.recipes.index', ['user' => 'Josefita', 'recipes' => $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recipes.edit', ['user' => 'Josefita']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipe;
        $recipe->name = $request->name;
        $recipe->quantity = $request->quantity;
        $recipe->link = $request->link;
        $recipe->vegan = $request->vegan == 'on' ? 1 : 0;
        $recipe->factor = $request->factor;
        $recipe->detail = $request->details;
        $recipe->estimated_time = $request->estimated_time;
        $recipe->save();


        return redirect()->route('recipes.show',  [$recipe]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('admin.recipes.show', ['user' => 'Josefita', 'recipe' => $recipe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('admin.recipes.edit', ['user' => 'Josefita', 'recipe' => $recipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $recipe->name = $request->name;
        $recipe->quantity = $request->quantity;
        $recipe->link = $request->link;
        $recipe->vegan = $request->vegan == 'on' ? 1 : 0;
        $recipe->factor = $request->factor;
        $recipe->detail = $request->details;
        $recipe->estimated_time = $request->estimated_time;
        $recipe->save();


        return redirect()->route('recipes.show',  [$recipe]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {

    }

    public function editIngredients(Recipe $recipe){
        $ingredients = Ingredient::orderBy('id', 'asc')->get();
        $list_ingredients = [];

        foreach ($recipe->ingredients as $ingredient) {
            array_push($list_ingredients, $ingredient->id);
        }

        return view(
            'admin.recipes.ingredients',
            [
                'user' => 'Josefita',
                'recipe' => $recipe,
                'ingredients' => $ingredients,
                'list_ingredients' => $list_ingredients
            ]
        );
    }

    public function updateIngredients(Recipe $recipe, Request $request){
        $recipe->ingredients()->detach();
        foreach ($request->except('_token') as $key => $value) {
            $recipe->ingredients()->attach($key, ['quantity' => $value]);
        }
        return view('admin.recipes.show', ['user' => 'Josefita', 'recipe' => $recipe]);
    }
}
