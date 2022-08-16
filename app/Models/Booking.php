<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_id', 'venue_id', 'price', 'date', 'status', 'payment_method',
    ];

    public function venue()
    {
       return $this->belongsTo(Venue::class, 'venue_id', 'id' );
    }

    
    public function user()
    {
       return $this->belongsTo(User::class, 'customer_id', 'id' );
    }
}
