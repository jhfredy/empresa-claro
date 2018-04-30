<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class OperadorController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function confirmar(Solicitud $solicitud) {
        $solicitud->update(['estado' => 'terminado']);
        return $solicitud;
    }
}
