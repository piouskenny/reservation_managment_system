<?php

namespace App\Http\Livewire\Pages;

use App\Models\Room;
use Livewire\Component;

class RoomPage extends Component
{
    public $room;

    public function mount($room_id)
    {
        $this->room = Room::find($room_id);
    }
    public function render()
    {
        return view('livewire.pages.room-page', ['room' => $this->room])->extends('layouts.app');
    }
}
