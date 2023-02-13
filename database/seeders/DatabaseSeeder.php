<?php

namespace Database\Seeders;

use App\Models\PokemonAbilities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            PokemonSeeder::class,
            TypesSeeder::class,
            AbilitiesSeeder::class,
            PokemonAbilitiesSeeder::class,
            PokemonTypesSeeder::class,
        ]);
    }
}
