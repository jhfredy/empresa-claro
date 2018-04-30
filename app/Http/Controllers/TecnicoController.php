<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TecnicoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function tecnicos() {
        return User::tecnicos()->get();
    }

    public function citas() {
        $user = auth()->user();
        return $user->citas()->with('solicitud.servicio', 'solicitud.cliente.municipio.departamento')->get();
    }
    
    
}
