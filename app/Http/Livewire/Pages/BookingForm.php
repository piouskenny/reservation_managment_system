<?php

namespace App\Http\Livewire\Pages;

use App\Models\Room;
use Livewire\Component;

class BookingForm extends Component
{
    public $room;
    public $room_id;

    public function mount($id)
    {
        $this->room = Room::find($id);
        $this->room_id = $id;
    }
    public function render()
    {
        return view('livewire.pages.booking-form')->extends('layouts.app');
    }
}
