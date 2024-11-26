<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';

    protected $fillable = ['name', 'description', 'days', 'nights', 'price', 'max_people'];

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }
}
