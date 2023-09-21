<?php

namespace Database\Seeders;

use App\Models\SubjectCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Social',
            'Científica',
            'Tecnológica',
            'Prática',
            'Existencial',
            'Prática teórica',
            'Complementar'
        ];

        foreach ($categories as $category) {
            SubjectCategory::create([
                'name' => $category
            ]);
        }
    }
}
