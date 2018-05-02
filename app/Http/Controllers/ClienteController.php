<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Servicio;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Cliente::with('solicitud.servicio', 'municipio.departamento')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'cedula' => 'required|numeric|unique:clientes',
            'correo' => 'required|email|unique:clientes',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
            'municipio_id' => 'required|integer',
            'servicio_id' => 'required|integer'
        ]);

        $cliente = Cliente::create($data);
        $servicio = Servicio::find($data['servicio_id']);
        $cliente->solicitud()->create([
            'servicio_id' => $servicio->id,
            'ingreso' => $servicio->costo
        ]);
        return $cliente;
    }

   
}
