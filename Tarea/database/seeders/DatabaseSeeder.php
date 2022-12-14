<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Perro;
use App\Models\Interaccion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Perro::factory(3)->create();

        /*
        $perro = Perro::factory()->create();

        $posts = Interaccion::factory()
            ->count(3)
            ->for($perro)
            ->for($perro)
            ->create();
        */
    }
}
