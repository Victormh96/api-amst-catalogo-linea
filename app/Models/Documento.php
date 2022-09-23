<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    public $table= "documento";
 
    public function cuenta()
    {
        return $this->belongsTo('App\Models\Cuenta','id_cuenta');
    }
}
