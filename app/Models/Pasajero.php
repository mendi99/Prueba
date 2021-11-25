<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'dni',
        'edad',
     ];

     function vuelo(){
        return $this->belongsToMany('App\Models\Vuelo')->withPivot('num_res')->withTimestamps();
     }
}
