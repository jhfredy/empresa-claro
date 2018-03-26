<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre', 'cedula', 'correo', 'telefono', 'direccion', 'municipio_id'
    ];

    public function municipio() {
        return $this->belongsTo(Municipio::class);
    }

    public function solicitud() {
        return $this->hasOne(Solicitud::class);
    }
}
