<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ['organization_name'];
    

    public function staffMembers()
    {
        return $this->hasMany(StaffMember::class);
    }
}

