<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Edmilson',
            'email' => '4an1onio@gmail.com',
            'password' => bcrypt('11235813')
        ]);

        $this->call([
            MonthSeeder::class,
            SchoolClassSeeder::class,
            QuarterSeeder::class,
            ProvinceSeeder::class,
            CountySeeder::class,
            SchoolSeeder::class,
            SchoolYearSeeder::class,
            SchoolSubjectSeeder::class,
            SubjectCategorySeeder::class,
            CourseSeeder::class,
            SchoolPlanSeeder::class,
            BankSeeder::class,
            PaymentDescriptionSeeder::class,
            SealNoteSeeder::class,
            PriceSeeder::class,
            FinePercentageSeeder::class,
            LastMonthPaymentSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
