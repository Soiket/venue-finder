<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    protected $fillable=[
        'name', 'zone_id', 'price', 'discount', 'address', 'description', 'image', 'location'
    ];

    public function zone()
    {
       return $this->belongsTo(Zone::class, 'zone_id', 'id' );
    }

}
