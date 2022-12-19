<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Perro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perro>
 */
class PerroFactory extends Factory
{
    
    protected $model = Perro::class;

    public function definition()
    {
        return [
            'per_nombre' => $this->faker->name,
            'per_descripcion' => $this->faker->sentence,
        ];
    }
}
