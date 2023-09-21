<?php

namespace Database\Seeders;

use App\Models\Quarter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quarters = [
            'Iº Trimestre',
            'IIº Trimestre',
            'IIIº Trimestre',
            'Final'
        ];

        foreach ($quarters as $quarter) {
            Quarter::create([
                'order' => $quarter
            ]);
        }
    }
}
