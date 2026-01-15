<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['full_name'];
     

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('role')->withTimestamps();
    }
}
