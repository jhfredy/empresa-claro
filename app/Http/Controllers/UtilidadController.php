<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class UtilidadController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {
        return Solicitud::where('estado', 'terminado')->with('servicio')->get();
    }
}
