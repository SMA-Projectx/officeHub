<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRoomFeatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_room_id',
        'feature_id',
        'status',
    ];
}
