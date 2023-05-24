<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Citizen;
use App\Models\Ticket;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $citizens = Citizen::all();
        $tickets = Ticket::all();

        foreach ($tickets as $ticket) {
            $registrationCount = mt_rand(1, 6); // Số lượng bản ghi ngẫu nhiên cho mỗi ticket_id

            for ($i = 0; $i < $registrationCount; $i++) {
                $citizen = $citizens->random();
                
                $ticket->registrations()->create([
                    'citizen_id' => $citizen->id,
                    'ticket_id' => $ticket->id,
                    'registration_time' => '2021-08-11 11:37:12',
                ]);
            }
        }
    }
}
