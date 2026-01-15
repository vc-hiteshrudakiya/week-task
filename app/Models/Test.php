<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  protected $fillable = ['name', 'meta_data'];

    
    protected $casts = [
        'meta_data' => 'array',
    ];
}
