<?php

namespace App\Http\Livewire;
use App\Models\Room;


use Livewire\Component;

class Home extends Component
{
    // public $rooms;

    public function render()
    {
        $rooms = Room::all();

        return view('livewire.home', ['rooms' => $rooms])->extends('layouts.app');
    }

    
}
