<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'property_room_id',
        'start_time',
        'end_time',
        'status',
    ];

    public function room(){
        return $this->belongsTo(PropertyRooms::class, 'property_room_id');
    }
}
