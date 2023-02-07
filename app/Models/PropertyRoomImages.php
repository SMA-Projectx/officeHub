<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRoomImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_room_id',
        'name',
        'is_primary',
        'status',

    ];
}
