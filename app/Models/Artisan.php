<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'artisan', 'number', 'hostel', 'department', 'level', 'password'
    ];
}
