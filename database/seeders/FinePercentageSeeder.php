<?php

namespace Database\Seeders;

use App\Models\FinePercentage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinePercentageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FinePercentage::factory(1)->create();
    }
}
