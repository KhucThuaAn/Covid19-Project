<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Citizen;
use Illuminate\Database\Eloquent\Factories\Factory;


class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // factory(Citizen::class, 200)->create();
        Citizen::factory()
            ->count(200)
            ->create();
    }
}
