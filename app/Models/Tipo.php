<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public function incidencias ()
    {
    	return $this->hasMany(Incidencia::class);
    }
}
