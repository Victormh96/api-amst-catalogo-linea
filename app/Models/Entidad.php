<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    public $table= "entidad";

    public function cuenta()
    {
    	return $this->hasOne('App\Models\Cuenta');
    }
}
