<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [            
            [
                'id' => '1',
                'campaign_id' => '1',
                'name' => 'Vé bình thường',
                'cost' => 100000,
                'validity' => 0,
                'amount' => null,
                'until' => null,
            ],
            [
                'id' => '2',
                'campaign_id' => '1',
                'name' => 'Vé thương gia',
                'cost' => 250000,
                'validity' => 1,
                'amount' => 500,
                'until' => null,
            ],
            [
                'id' => '3',
                'campaign_id' => '1',
                'name' => 'Vé VIP',
                'cost' => 599000,
                'validity' => 1,
                'amount' => 100,
                'until' => null,
            ],
            [
                'id' => '4',
                'campaign_id' => '1',
                'name' => 'Vé siêu VIP',
                'cost' => 999000,
                'validity' => 1,
                'amount' => 50,
                'until' => null,
            ],
            [
                'id' => '5',
                'campaign_id' => '1',
                'name' => 'Vé đặc biệt',
                'cost' => 200000,
                'validity' => 2,
                'amount' => null,
                'until' => '2023-05-23',
            ],
           
        ];


        foreach ($items as $item) {
            Ticket::updateOrCreate(['id' => $item['id']], $item); 
        }
    }
}
