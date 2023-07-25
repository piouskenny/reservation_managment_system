<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Livewire\Pages\Message;

class BookingController extends Controller
{
    public $message;

    public function book($id)
    {

        $room = Room::find($id)->first();

        $room_status = $room->room_reservations;
        foreach ($room_status as $status) {
            // If true it means it is currecntly been reserved 
            if ($status->status == 1) {
                $content = "Success";
                return redirect(route('message', $content));
            } else {
                return back();
            }
        }
    }
}
