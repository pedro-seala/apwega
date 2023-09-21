<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            '10',
            '11',
            '12',
            '13'
        ];

        foreach($classes as $class) {
            SchoolClass::create([
                'level' => $class
            ]);
        }
    }
}
