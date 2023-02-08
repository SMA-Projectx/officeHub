<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'street_address',
        'address2',
        'town',
        'district_id',
        'postcode',
        'status',
        'is_approved',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function room(){
        return $this->hasMany(PropertyRooms::class);
    }

    public function district(){
        return $this->belongsTo(Districts::class);
    }
}
