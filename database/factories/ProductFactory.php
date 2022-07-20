<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /*
            $table->unsignedBigInteger('brand_id');
            $table->string('name');
            $table->string('description');
            $table->string('price');
            */
            'brand_id' => \App\Models\Brand::factory()->create()->id,
            'name' => $this->faker->text(25),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 100, 1000)
        ];
    }
}
