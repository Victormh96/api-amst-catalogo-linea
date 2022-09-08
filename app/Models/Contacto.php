<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $table= "contacto";

    public function detallecontacto()
    {
        return $this->belongsTo('App\Models\DetalleContacto','id_detalle_contacto');
    }

    public function cuenta()
    {
        return $this->belongsTo('App\Models\Cuenta','id_cuenta');
    }
}