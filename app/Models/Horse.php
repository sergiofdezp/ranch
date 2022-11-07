<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'raza', 'edad', 'doma', 'herraje', 'imagen'];
}
