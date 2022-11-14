<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre', 'descripcion'];

    public function horse(){
        return $this->belongsTo(Horse::class, 'horse_id');
    }
}
