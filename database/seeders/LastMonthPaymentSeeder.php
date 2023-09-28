<?php

namespace Database\Seeders;

use App\Models\LastMonthPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LastMonthPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $school_class_id = [1, 2, 3, 4];

        foreach ($school_class_id as $class_id) {
            LastMonthPayment::create([
                'month_id' => 7,
                'school_class_id' => $class_id
            ]);
        }
    }
}
