<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public $table= "servicio";

    public function cuenta()
    {
        return $this->belongsTo('App\Models\Cuenta','id_cuenta');
    }

    public function rubro()
    {
        return $this->belongsTo('App\Models\Rubro','id_rubro');
    }
}
