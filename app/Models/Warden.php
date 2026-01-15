<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warden extends Model
{
    protected $fillable = ['name'];

    public function room()
    {
        return $this->morphOne(Room::class, 'roomable');
    }
}
