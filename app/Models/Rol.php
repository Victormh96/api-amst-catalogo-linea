<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $table= "rol";

    public function usuario()
    {
    	return $this->hasOne('App\Models\User');
    }
}