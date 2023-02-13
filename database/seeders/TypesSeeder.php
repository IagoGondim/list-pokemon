<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Types;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $csvFile = fopen(base_path("database/data/types.csv"), "r");
        $abilitiesData = [];
        $firstline = true;

        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                $abilitiesData[] = [
                    "id" => $data[0],
                    "name" => $data[1],
                ];
            }
            $firstline = false;
        }

        Types::insertOrIgnore($abilitiesData);

        fclose($csvFile);
    }
}
