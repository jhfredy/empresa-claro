<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    
    protected $fillable = [
        'solicitud_id', 'user_id', 'fecha'
    ];

    protected $casts = [
        'fecha' => 'date'
    ];

    public function solicitud() {
        return $this->belongsTo(Solicitud::class);
    }

    public function usuario() {
        return $this->belongsTo(User::class);
    }
}
