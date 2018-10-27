<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
	public function tipo()
	{
		return $this->belongsTo(Tipo::class);
	}
}
