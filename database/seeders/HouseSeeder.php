<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $houses = [
            ['name' => 'The Victoria', 'price' => 250000, 'bedrooms' => 3, 'bathrooms' => 2, 'storeys' => 2, 'garages' => 2],
            ['name' => 'The Xavier', 'price' => 300000, 'bedrooms' => 4, 'bathrooms' => 3, 'storeys' => 1, 'garages' => 2],
            ['name' => 'The Como', 'price' => 200000, 'bedrooms' => 2, 'bathrooms' => 1, 'storeys' => 1, 'garages' => 1],
            ['name' => 'Green Meadows', 'price' => 350000, 'bedrooms' => 5, 'bathrooms' => 3, 'storeys' => 2, 'garages' => 3],
            ['name' => 'The Geneva', 'price' => 400000, 'bedrooms' => 6, 'bathrooms' => 3, 'storeys' => 2, 'garages' => 2],
            ['name' => 'Lakeview Estatesa', 'price' => 400000, 'bedrooms' => 6, 'bathrooms' => 3, 'storeys' => 2, 'garages' => 2],
            ['name' => 'The Clifton', 'price' => 400000, 'bedrooms' => 6, 'bathrooms' => 3, 'storeys' => 2, 'garages' => 2],
            ['name' => 'Hilltop', 'price' => 400000, 'bedrooms' => 6, 'bathrooms' => 3, 'storeys' => 2, 'garages' => 2],

        ];

        House::insert($houses);
    }
}
