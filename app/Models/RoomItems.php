<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomItems extends Model
{
    use HasFactory;

    protected $table = "items";
    
    protected $fillable =  [
        'room_id',
        'name'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}


