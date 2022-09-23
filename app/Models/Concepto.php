<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    public $table= "concepto";

    public function detalleconcepto()
    {
        return $this->belongsTo('App\Models\DetalleConcepto','id_detalle_concepto');
    }

    public function cuenta()
    {
        return $this->belongsTo('App\Models\Cuenta','id_cuenta');
    }
}
