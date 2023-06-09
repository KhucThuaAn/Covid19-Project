<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
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
                'email' => 'khucthuadu2809@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'id' => '2',
                'name' => 'Nguyễn Quang Thuận',
                'email' => 'nqt@gmail.com',
                'password' => Hash::make('123456'),
            ]
        ];
    
        foreach ($items as $item) {
            User::updateOrCreate(['id' => $item['id']], $item); 
        }
    }
}
