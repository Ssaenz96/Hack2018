<?php

namespace App\Http\Controllers\Delito;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Incidencia;
use App\Http\Services\Validators;
use Illuminate\Support\Facades\Auth;

class IncidenciaController extends Controller
{   

    private $validatorsService;
    private $userController;
    private $numeroMaximoIntentos;
    private $mensajeMaximoIntentos;

    /**
     * Start authentication to users
     * and keeper each user's id
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->validatorsService = new Validators();
        $this->numeroMaximoIntentos = 3;
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

            $incidencia->latitud = $this->validatorsService->validarIntNull($request->latitud);
            $incidencia->longitud = $this->validatorsService->validarIntNull($request->longitud);
            $incidencia->fecha = $this->validatorsService->validarFechaNull($request->fecha);
            $incidencia->comentario = $this->validatorsService->validarStringNull($request->comentario);
            $incidencia->tipo_id = $this->validatorsService->validarIntNull($request->tipo);
            $incidencia->user_id = Auth::user()->id;

            Auth::user()->num_incidentes = $this->validatorsService->validarIntNull(Auth::user()->num_incidentes) + 1;
            
            if (Auth::user()->num_incidentes <= $this->numeroMaximoIntentos) {
                Auth::user()->save();
                $incidencia->save();

                $this->mensajeMaximoIntentos = "Hola la denuncia #$incidencia->id ha sido añadida exitosamente";
                return $this->mensajeMaximoIntentos;
            } else {
                $this->mensajeMaximoIntentos = "Hola ".Auth::user()->name.", excediste el numero máximo de incidencias.";
                return $this->mensajeMaximoIntentos;
            }

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
