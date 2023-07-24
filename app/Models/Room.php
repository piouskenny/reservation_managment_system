<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'category',
        'location',
        'description'
    ];

    public function room_reservations()
    {
        return $this->hasMany(RoomReservation::class);
    }

    public function room_items()
    {
        return $this->hasMany(RoomItems::class);
    }

    public function room_images()
    {
        return $this->hasMany(RoomImages::class);
    }
}
