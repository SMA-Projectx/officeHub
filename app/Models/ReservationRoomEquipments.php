<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationRoomEquipments extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_id',
        'reservation_room_id',
        'amount',
        'status',
    ];
}
