<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\IngredientController;
use App\Models\Recipe;

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


