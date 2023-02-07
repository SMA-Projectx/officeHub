<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationRooms extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'reservation_id',
        'property_room_id',
        'start_time',
        'end_time',
        'note',
        'status',
     ];
}
