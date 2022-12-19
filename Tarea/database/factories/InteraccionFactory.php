<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\Interaccdion;
use App\Models\Perro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interaccion>
 */
class InteraccionFactory extends Factory
{
    
    protected $model = Interaccion::class;

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
