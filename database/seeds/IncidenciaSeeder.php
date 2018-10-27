<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tipo;

class IncidenciaSeeder extends Seeder
{
    public function run()
    {
        foreach(Config::get('constants.seeders.tipos') as $tipo):
            Tipo::create([
                'nombre'	=> $tipo['nombre'],
            	'peso'	=> $tipo['peso']
            ]);
        endforeach;
    }
}
