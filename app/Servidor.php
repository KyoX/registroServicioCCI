<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    public function equipos(){
        return $this->belongsTo(equipo::class);
    }

    public function roles(){
        return $this->belongsTo(rol::class);
    }

    public function obtener_historial_servidor(){
        return $this->hasMany(historialservidor::class);
    }
}
