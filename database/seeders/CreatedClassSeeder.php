<?php

namespace Database\Seeders;

use App\Models\CreatedClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreatedClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CreatedClass::factory(12)->create();
    }
}
