<?php

namespace Database\Factories\Model;

use App\Models\Model\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=> function(){
                return Product::all()->random();
            },
            'customer' => $this->faker->name,
            'position' => $this->faker->paragraph,
            'city' => $this->faker->name,
        ];
    }
}
