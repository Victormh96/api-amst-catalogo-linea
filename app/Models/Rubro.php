<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    public $table= "rubro";

    public function servicio() {
        return $this->hasOne('App\Models\Servicio');
    }
    
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria','id_categoria');
    }

}