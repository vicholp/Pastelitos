<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\Ingredient;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::factory()
            ->count(10)
            ->hasAttached(
                Ingredient::factory()->count(5),
                ['quantity' => 2])
            ->create();
    }
}
