<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PokemonTypes;

class PokemonTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/pokemon_types.csv"), "r");
        $pokemonsTypesData = [];
        $firstline = true;

        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                $pokemonsTypesData[] = [
                    "pokemon_id" => $data[0],
                    "type_id" => $data[1],
                ];
            }
            $firstline = false;
        }

        PokemonTypes::insertOrIgnore($pokemonsTypesData);

        fclose($csvFile);
    }
}
