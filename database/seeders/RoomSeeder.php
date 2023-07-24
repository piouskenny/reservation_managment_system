<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'name' => "Heavens Gold 4",
                'price' => 4000.0,
                'category' => "VIP",
                'location' => "ROOM 400",
                'description' => "Our Second best room so far",
            ],
            [
                'name' => "Love world Silver 4",
                'price' => 1000.0,
                'category' => "Regular Room",
                'location' => "ROOM 401",
                'description' => "Second Regular Room",
            ],
            [
                'name' => "Motel Standard Gold 4",
                'price' => 500.0,
                'category' => "Normal Room",
                'location' => "ROOM 402",
                'description' => "Our Second Room roomfor hotel",
            ]
        ];


        foreach ($rooms as $key => $value) {
            Room::create($value);
        }
    }
}
