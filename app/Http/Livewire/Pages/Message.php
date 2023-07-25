<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Message extends Component
{
    public $message;
    public $icon;

    public $title;

    public function mount($message) {
        $this->message = $message;

        if($this->message == "Reserved") {
            $this->title = "Your Booking was not successful";
            $this->message = "Sorry, This room is currently in use Check back in 5 Minutes";
            $this->icon = 'failed';
        } elseif($this->message == "Success") {
            $this->title = "Your Booking was successful";
            $this->message = "Your Order has been confirmed, click the button below to print receipt";
            $this->icon = 'success';    
        }
    }

    public function render()
    {
        return view('livewire.pages.message', ['message' => $this->message])->extends('layouts.app');
    }
}
