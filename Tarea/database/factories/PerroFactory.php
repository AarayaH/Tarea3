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
            'per_urlfoto' => 'https://images.hola.com/imagenes/mascotas/20221020219416/razas-perros-toy/1-154-385/razas-de-perro-toy-t.jpg'
        ];
    }
}
