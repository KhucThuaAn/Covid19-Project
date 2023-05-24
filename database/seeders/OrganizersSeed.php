<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Organizer;

class OrganizersSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [            
            [
                'id' => '1',
                'name' => 'Khúc Thừa An',
                'slug' => 'khucthuaan',
                'email' => 'khucthuadu2809@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'id' => '2',
                'name' => 'Nguyễn Quang Thuận',
                'slug' => 'nguyenquangthuan',
                'email' => 'nqt@gmail.com',
                'password' => Hash::make('123456'),
            ]
        ];
    
        foreach ($items as $item) {
            Organizer::updateOrCreate(['id' => $item['id']], $item);
        }

    }
}
