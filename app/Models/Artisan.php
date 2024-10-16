<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Artisan extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'artisan', 'number', 'hostel', 'department', 'level', 'password'
    ];
}
