<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  
    protected $fillable = ['produc_id', 'review'];

    public function product()
    {
        return $this->belongsTo(Produc::class, 'produc_id');
    }
}
