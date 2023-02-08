<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Property;

class Districts extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'province',
        'street_address',
        'status',
    ];

    public function property(){
        return $this->belongsTo(Property::class);
    }
}
