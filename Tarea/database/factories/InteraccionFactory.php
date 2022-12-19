<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interaccion>
 */
class InteraccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ran = [A, R];
        return [
            'perInteresado_id' => Perro::factory(),
            'perCandidato_id' => Perro::factory(),
            'inte_preferencia' => Arr::ramdom($ran),
        ];
    }
}
