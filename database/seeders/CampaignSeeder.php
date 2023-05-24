<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campaign;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::updateOrCreate([
            'id'=> 1,
            'organizer_id'=> 1,
            'name'=> 'Chiến dịch bảo vệ đồ án tốt nghiệp',
            'slug'=> 'chien-dich-bao-ve-do-an-tot-nghiep',
            'date'=> '2023-06-01',
        ]);
    }
}
