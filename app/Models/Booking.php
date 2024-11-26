<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'code',
        'email',
        'batch_id',
        'pax',
        'total_price',
        'status',
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
