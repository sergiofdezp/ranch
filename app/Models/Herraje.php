<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herraje extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = ['nombre'];

    public function horses(){
        return $this->hasOne(Horse::class, 'id');
    }
}
