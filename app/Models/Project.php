<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_name'];

    public function staff()
    {
        return $this->belongsToMany(Staff::class)->withPivot('role')->withTimestamps();
    }

}
