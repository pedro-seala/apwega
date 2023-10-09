<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            'Bengo',
            'Benguela',
            'Bié',
            'Cabinda',
            'Cuando-Cubango',
            'Cuanza Norte',
            'Cuanza Sul',
            'Cunene',
            'Huambo',
            'Huíla',
            'Luanda',
            'Lunda Norte',
            'Lunda Sul',
            'Malanje',
            'Moxico',
            'Namibe',
            'Uíge',
            'Zaire'
        ];

        foreach ($provinces as $province) {
            Province::create([
                'name' => $province
            ]);
        }
    }
}
