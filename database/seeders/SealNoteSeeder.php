<?php

namespace Database\Seeders;

use App\Models\SealNote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SealNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SealNote::factory(5)->create();
    }
}
