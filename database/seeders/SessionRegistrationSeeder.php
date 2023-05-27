<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Session;
use App\Models\Registration;
use App\Models\Campaign;

class SessionRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sessions = Session::all();
        $registrations = Registration::all();
        $campaigns = Campaign::all();

        foreach ($sessions as $session) {
            $registrationCount = mt_rand(70, 150); // Số lượng bản ghi ngẫu nhiên cho mỗi session_id

            for ($i = 0; $i < $registrationCount; $i++) {
                $registration = $registrations->random();
                $campaign = $campaigns->random();
                
                $session->session_registrations()->updateOrCreate([
                    'registration_id' => $registration->id,
                    'session_id' => $session->id,
                    'campaign_id' => $session->place->area->campaign->id,
                ]);
            }
        }
    }
}
