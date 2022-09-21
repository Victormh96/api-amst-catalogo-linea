<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    public $table= "galeria";
 
    public function cuenta()
    {
        return $this->belongsTo('App\Models\Cuenta','id_cuenta');
    }
}
