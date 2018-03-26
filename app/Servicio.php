<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'nombre', 'costo'
    ];

    public function solicitudes() {
        return $this->hasMany(Solicitud::class);
    }
}
