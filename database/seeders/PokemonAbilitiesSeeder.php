<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PokemonAbilities;

class PokemonAbilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/pokemon_abilities.csv"), "r");
        $pokemonsAbilitiesData = [];
        $firstline = true;

        while(($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                $pokemonsAbilitiesData[] = [
                    "pokemon_id" => $data[0],
                    "ability_id" => $data[1],
                ];
            }
            $firstline = false;
        }

        PokemonAbilities::insertOrIgnore($pokemonsAbilitiesData);

        fclose($csvFile);
    }
}
