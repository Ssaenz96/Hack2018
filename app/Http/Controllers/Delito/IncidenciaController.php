<?php

namespace App\Http\Controllers\Delito;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Incidencia;

class IncidenciaController extends Controller
{

    /**
     * Start authentication to users
     * and keeper each user's id
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $inceidencia = Incidencia::orderBy('nombre', 'ASC')
        //                          ->get(['id', 'nombre']);

        // return $incidencia;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $incidencia = new Incidencia();

            $incidencia->latitud = $request->latitud;
            $incidencia->longitud = $request->longitud;
            $incidencia->fecha = $request->fecha;
            $incidencia->comentario = $request->comentario;
            $incidencia->tipo_id = $request->tipo_id;
            $incidencia->user_id = Auth::user()->id;

            return $incidencia->id;

        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
