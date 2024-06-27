<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeFileUpload extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_1',
        'file_2',
        'file_3',
        'file_4',
        'file_5',
        'file_6',
   ];
}