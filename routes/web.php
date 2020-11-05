<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', function(){
    $recipe = Recipe::find(1)->ingredients;
    dd($recipe[0]->pivot->quantity);
});
Route::view('login', 'auth.login')->name('login');
