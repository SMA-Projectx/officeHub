<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRoomEquipments extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_room_id',
        'equipment_id',
        'quantity',
        'unit_amount',
        'is_chargeable',
        'status',
    ];
}
