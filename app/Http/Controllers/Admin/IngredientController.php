<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::get();
        return view('admin.ingredients.index', ['user' => 'Josefita', 'ingredients' => $ingredients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ingredients.edit', ['user' => 'Josefita']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingredient = new Ingredient;
        $ingredient->name = $request->name;
        $ingredient->type = $request->type;
        $ingredient->unit = $request->unit;
        $ingredient->unit_price = $request->unit_price;
        $ingredient->unit_quantity = $request->unit_quantity;
        $ingredient->remaining_quantity = $request->remaining_quantity;
        $ingredient->remaining_quantity_alert = $request->remaining_quantity_alert;

        $ingredient->save();

        return redirect()->route('ingredients.show',  [$ingredient]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        return view('admin.ingredients.show', ['user' => 'Josefita', 'ingredient' => $ingredient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        return view('admin.ingredients.edit', ['user' => 'Josefita', 'ingredient' => $ingredient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        $ingredient->name = $request->name;
        $ingredient->type = $request->type;
        $ingredient->unit = $request->unit;
        $ingredient->unit_price = $request->unit_price;
        $ingredient->unit_quantity = $request->unit_quantity;
        $ingredient->remaining_quantity = $request->remaining_quantity;
        $ingredient->remaining_quantity_alert = $request->remaining_quantity_alert;
        $ingredient->save();

        return redirect()->route('ingredients.show', [$ingredient]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        //
    }


}
