<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 


class Order extends Model
{
    use HasFactory;
    protected $fillable = ['buyer_id','total'];

    public function buyer() {
        return $this->belongsTo(Buyer::class);
    }
}
