<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'name',
        'description',
        'price',
        'status',
    ];

    public function property(){
        return $this->belongsTo(Properties::class);
    }
}
