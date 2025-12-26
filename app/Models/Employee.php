<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  use HasFactory;
   public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // Scope: filter by department
    public function scopeDepartment($query, $department)
    {
        return $query->where('department', $department);
    }

    // Scope: high salary employees
    public function scopeHighSalary($query, $amount)
    {
        return $query->where('salary', '>', $amount);
    }
}
