<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Order extends Model
{
    use HasFactory;

	protected $fillable = ['buyer_id', 'item_id'];

	public function buyer()
	{
	    return $this->belongsTo(Buyer::class);
	}

	public function item()
	{
	    return $this->belongsTo(Item::class);
	}

}
