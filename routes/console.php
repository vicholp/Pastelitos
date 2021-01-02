<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use App\Models\Ingredient;
use App\Models\Recipe;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('ingredientes', function(){
    Ingredient::create([
      'name' => 'Cacao',
      'unit' => 'gr',
      'unit_price' => '2500',
      'unit_quantity' => '500',
      'type' => 'consumable'
    ]);
    Ingredient::create([
      'name' => 'Harina',
      'unit' => 'gr',
      'unit_price' => '850',
      'unit_quantity' => '1000',
      'type' => 'consumable'
    ]);
    Ingredient::create([
      'name' => 'Azucar',
      'unit' => 'gr',
      'unit_price' => '800',
      'unit_quantity' => '1000',
      'type' => 'consumable'
    ]);
    Ingredient::create([
      'name' => 'Aceite',
      'unit' => 'gr',
      'unit_price' => '1700',
      'unit_quantity' => '1000',
      'type' => 'consumable'
    ]);
    Ingredient::create([
      'name' => 'Bicarbonato',
      'unit' => 'gr',
      'unit_price' => '400',
      'unit_quantity' => '100',
      'type' => 'consumable'
    ]);
});
