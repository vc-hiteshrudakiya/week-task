<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   use HasFactory;

    protected $fillable = ['name', 'course_id', 'status', 'marks'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Scope: active students
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // Scope: high marks
    public function scopeHighMarks($query, $marks)
    {
        return $query->where('marks', '>=', $marks);
    }

}
