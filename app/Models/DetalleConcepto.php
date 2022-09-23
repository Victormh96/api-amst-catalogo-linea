<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleConcepto extends Model
{
    public $table= "detalle_concepto";

    public function concepto()
    {
    	return $this->hasOne('App\Models\Concepto');
    }
}
