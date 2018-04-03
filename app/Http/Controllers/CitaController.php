<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use Carbon\Carbon;

class CitaController extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer',
            'solicitud_id' => 'required|integer',
            'fecha' => 'required|date|after:now'
        ]);
        $data['fecha'] = new Carbon($data['fecha']);
        $cita = Cita::create($data);
        $cita->solicitud->update(['estado' => 'habilitado']);
        return $cita;
    }

    
}
