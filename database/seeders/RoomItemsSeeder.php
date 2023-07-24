<?php

namespace Database\Seeders;

use App\Models\RoomItems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomitems = [
            [
                'room_id' => 1,
                'name' => "Free Wifi",
            ],
            [
                'room_id' => 1,
                'name' => "Netflix",
            ],
            [
                'room_id' => 1,
                'name' => "PS-5",
            ],
            [
                'room_id' => 1,
                'name' => "Dining Table",
            ]
        ];


        foreach ($roomitems as $key => $value) {
            RoomItems::create($value);
        }
    }
}
