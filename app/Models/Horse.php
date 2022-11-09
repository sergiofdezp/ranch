<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nombre', 'raza', 'edad', 'doma', 'herraje', 'vacuna_id', 'imagen'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function vacunas(){
        return $this->hasMany(Vacuna::class, 'id');
    }
}
