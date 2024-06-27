<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Department;

class Employee extends Model
{
    use HasFactory;

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }
}