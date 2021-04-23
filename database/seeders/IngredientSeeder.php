<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use App\Models\Recipe;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
