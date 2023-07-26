<?php

namespace App\Http\Controllers;

use App\Models\Room;
// use App\Http\Livewire\Pages\Message;

class BookingController extends Controller
{
    public $message;

    public function book($id)
    {

        $room = Room::find($id);

        $room_status = $room->room_reservations;

        if (!empty($room_status)) {
            foreach ($room_status as $status) {
                // If true it means it is currecntly been reserved 
                if ($status->status == true) {
                    $content = "Reserved";
                    return redirect(route('message', $content));
                }
            }
        }
        return redirect(route('booking_form', $id));
    }
}
