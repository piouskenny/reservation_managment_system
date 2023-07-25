<?php

namespace Database\Seeders;

use App\Models\RoomReservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomitems = [
            [
                'room_id' => 1,
                'status' => true,
            ],
            [
                'room_id' => 4,
                'status' => true,
            ],
            [
                'room_id' => 6,
                'status' => true,
            ],
            [
                'room_id' => 7,
                'status' => true,
            ]
        ];


        foreach ($roomitems as $key => $value) {
            RoomReservation::create($value);
        }
    }
}
