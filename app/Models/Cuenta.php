<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    public $table= "cuenta";

    public function usuario()
    {
    	return $this->hasOne('App\Models\User');
    }
    
    public function galeria()
    {
        return $this->hasMany('App\Models\Galeria', 'id_cuenta', 'id');
    }

    public function contacto()
    {
        return $this->hasMany('App\Models\Contacto', 'id_cuenta', 'id');
    }

    public function genero()
    {
        return $this->belongsTo('App\Models\Genero','id_genero');
    }

    public function servicio()
    {
    	return $this->hasMany('App\Models\Servicio', 'id_cuenta', 'id');
    }
}