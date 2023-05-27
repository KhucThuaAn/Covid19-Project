<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campaign;
use App\Models\Area;
use App\Models\Place;
use App\Models\Session;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(OrganizersSeed::class);
        $this->call(CampaignSeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(CitizenSeeder::class);
        $this->call(RegistrationSeeder::class);
        // $this->call(SessionRegistrationSeeder::class);
    }
}
