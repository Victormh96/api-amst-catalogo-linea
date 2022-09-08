<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleContacto extends Model
{
    public $table= "detalle_contacto";

    public function contacto()
    {
    	return $this->hasOne('App\Models\Contacto');
    }
}
