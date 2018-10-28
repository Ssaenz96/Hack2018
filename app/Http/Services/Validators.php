<?php 

namespace App\Http\Services;

class Validators {

	public function validarStringNull($string)
	{
		if (is_null($string)) {
			$string = '';
		}

		return $string;
	}

	public function validarIntNull($int)
	{
		if (is_null($int)) {
			$int = 0;
		}

		return $int;
	}

	public function validarFechaNull($fecha)
	{
		if (is_null($fecha)) {
			$fecha = date("Y-m-d");
		}

		return $fecha;
	}

}