<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produc extends Model
{
     protected $fillable = ['name'];
     public function reviews()
     {
        return $this->hasMany(Review::class, 'produc_id');
     }

}
