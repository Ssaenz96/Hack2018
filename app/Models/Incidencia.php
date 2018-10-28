<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Incidencia extends Model
{
	public function tipo()
	{
		return $this->belongsTo(Tipo::class);
	}

	// public function user()
	// {
	// 	return $this->belongsTo(User::class);
	// }
}
