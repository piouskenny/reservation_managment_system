<?php

namespace App\Http\Livewire\Compontent;

use Livewire\Component;

class RoomCard extends Component
{
    public $name;
    public $price;
    public $category;
    public $location;
    public $description;

    public $room_id;


    public function  mount($room)
    {
        $this->name = $room->name;
        $this->price = $room->price;
        $this->category = $room->category;
        $this->location = $room->location;
        $this->description = $room->description;
        $this->room_id = $room->id;

    }
    public function render()
    {
        return view('livewire.compontent.room-card', ['id' => $this->room_id,'name' => $this->name, 'price' => $this->price, 'category' => $this->category, 'location' => $this->location, 'description' => $this->location]);
    }
}
