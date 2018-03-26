<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "solicitudes";

    protected $fillable = [
        'cliente_id', 'estado', 'servicio_id', 'ingreso'
    ];

    public function cita() {
        return $this->hasOne(Cita::class);
    }

    public function servicio() {
        return $this->belongsTo(Servicio::class);
    }

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}
