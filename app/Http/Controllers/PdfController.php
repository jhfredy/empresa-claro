<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use PDF;

class PdfController extends Controller
{
    public function utilidad(){
        $solicitudes = Solicitud::with("servicio")->get();
        $ingreso = $solicitudes->sum('ingreso');
        $egreso = $solicitudes->sum('servicio.gasto');
        $utilidad = $ingreso - $egreso;
        $pdf = PDF::loadView('claro.reportes', compact('solicitudes', 'ingreso', 'egreso', 'utilidad'));
        return $pdf->stream('reporte de claro.pdf');
    }
}
