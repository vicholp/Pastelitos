<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\IngredientController;
use App\Models\Recipe;
use App\Models\Ingredient;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminController::class, 'main']);

Route::get('recipe/{recipe}/ingredients', [RecipeController::class, 'editIngredients']);
Route::post('recipe/{recipe}/ingredients', [RecipeController::class, 'updateIngredients']);




Route::resource('recipes', RecipeController::class);
Route::resource('ingredients', IngredientController::class);


Route::get('api/ingredients', function () {
  return Ingredient::get();
});

Route::get('api/ingredients/query/{query}', function ($query) {
  return Ingredient::usingSearchString($query)->get();
});
Route::get('api/ingredients/{ingredient}', function (Ingredient $ingredient) {
  return $ingredient;
});
Route::get('api/recipes', function () {
  return Recipe::get();
});
Route::get('api/recipes/{recipe}/ingredients', function (Recipe $recipe) {
  return $recipe->ingredients;
});

