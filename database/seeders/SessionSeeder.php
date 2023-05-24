<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder 
{    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [            
            [
                'id' => '1',
                'place_id' => '1',
                'title' => 'Phiên tiêm chủng thứ nhất',
                'description' => 'Mô tả 1',
                'vaccinator' => 'Khúc Thừa An',
                'start' => '00:00;00',
                'end' => '23:59:59',
                'type' => '0',
                'cost' => '100000',
            ],
            [
                'id' => '2',
                'place_id' => '1',
                'title' => 'Thi tốt nghiệp cao đẳng',
                'description' => 'Mô tả 2',
                'vaccinator' => 'Khúc Thừa An',
                'start' => '00:00;00',
                'end' => '23:59:59',
                'type' => '0',
                'cost' => '190000',
            ],
            [
                'id' => '3',
                'place_id' => '1',
                'title' => 'Vé VIP',
                'description' => 'Tổng kết năm học',
                'vaccinator' => 'Khúc Thừa An',
                'start' => '00:00;00',
                'end' => '23:59:59',
                'type' => '0',
                'cost' => '300000',
            ],
            [
                'id' => '4',
                'place_id' => '1',
                'title' => 'Viết báo cáo thực tập',
                'description' => 'Mô tả 4',
                'vaccinator' => 'Khúc Thừa An',
                'start' => '00:00;00',
                'end' => '23:59:59',
                'type' => '0',
                'cost' => '400000',
            ],
            [
                'id' => '5',
                'place_id' => '1',
                'title' => 'Thi tay nghề quốc tế',
                'description' => 'Mô tả 5',
                'vaccinator' => 'Khúc Thừa An',
                'start' => '00:00;00',
                'end' => '23:59:59',
                'type' => '0',
                'cost' => '999000',
            ],
           
        ];


        foreach ($items as $item) {
            Ticket::updateOrCreate(['id' => $item['id']], $item); 
        }
    }
}
