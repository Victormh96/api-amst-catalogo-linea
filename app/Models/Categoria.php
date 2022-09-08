<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table= "categoria";

    public function rubro()
    {
    	return $this->hasOne('App\Models\Rubro');
    }
}