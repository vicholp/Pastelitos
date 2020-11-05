<?php

namespace Database\Factories;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ingredient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'unit' => $this->faker->sentence(1),
            'unit_price' => $this->faker->numberBetween(1000,6000),
            'remaining_quantity' => $this->faker->numberBetween(1,5),
            'type' => 'intangible'
        ];
    }
}
