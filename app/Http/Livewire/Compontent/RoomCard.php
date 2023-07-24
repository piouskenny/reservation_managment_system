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

    public function  mount($room)
    {
        $this->name = $room->name;
        $this->price = $room->price;
        $this->category = $room->category;
        $this->location = $room->location;
        $this->description = $room->description;
    }
    public function render()
    {
        return view('livewire.compontent.room-card', ['name' => $this->name, 'price' => $this->price, 'category' => $this->category, 'location' => $this->location, 'description' => $this->location]);
    }
}
