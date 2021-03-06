<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * Roles del usuario
     * @var array
     */
    public static $ROLES = [
        'admin', 'tecnico', 'operador'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function citas() {
        return $this->hasMany(Cita::class);
    }

    public function scopeTecnicos($query) {
        return $query->where('rol', 'tecnico');
    }

    
}
