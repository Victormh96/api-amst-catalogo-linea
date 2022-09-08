<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public $table= "genero";

    public function cuenta()
    {
    	return $this->hasOne('App\Models\Cuenta');
    }
}
