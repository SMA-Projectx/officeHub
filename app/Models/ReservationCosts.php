<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationCosts extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'type_id',
        'data_id',
        'quantity',
        'amount',
        'status',
        'created_time',
        'status_time',
        'status_user_id',
    ];
}
