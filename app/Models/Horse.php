<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'nombre', 'sexo', 'raza', 'edad', 'doma_id', 'vacuna_id', 'herraje_id', 'imagen'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function vacunas(){
        return $this->belongsTo(Vacuna::class, 'vacuna_id');
    }

    public function domas(){
        return $this->belongsTo(Doma::class, 'doma_id');
    }

    public function herrajes(){
        return $this->belongsTo(Herraje::class, 'herraje_id');
    }
}
