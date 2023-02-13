<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemons;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/pokemons.csv"), "r");
        $PokemonsData = [];
        $firstline = true;

        while (($data = fgetcsv($csvFile, 1000, ";")) !== FALSE) {
            if (!$firstline) {
                $PokemonsData[] = [
                    "id" => $data[0],
                    "name" => $data[1],
                    "height" => $data[2],
                    "weight" => $data[3],
                    "img" => $data[4],
                ];
            }
            $firstline = false;
        }

        Pokemons::insertOrIgnore($PokemonsData);

        fclose($csvFile);
    }
}
