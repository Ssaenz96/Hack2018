<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Incidencia;

class IncidenciaSeeder extends Seeder
{
    public function run()
    {
        foreach(Config::get('constants.seeders.incidencias') as $incidencia):
            Incidencia::create([
            	'latitud' => $incidencia['latitud'],
                'longitud' => $incidencia['longitud'],
                'fecha' => $incidencia['fecha'],
                'comentario' => $incidencia['comentarios'],
                'tipo_id' => $incidencia['tipo_id'],
                'user_id' => $incidencia['user_id']
            ]);
        endforeach;
    }
}
