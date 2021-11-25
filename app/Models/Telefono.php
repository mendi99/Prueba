<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'number',
     ];

     public function usuario()
	{
    	return $this->belongsTo('App\Models\Usuario');
	}


}
