<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historialservidor extends Model
{
    public function servidores(){
        return $this->belongsTo(servidor::class);
    }

    public function servivios(){
        return $this->belongsTo(servicio::class);
    }

    public function asistencias(){
        return $this->belongsTo(tipoasistencia::class);
    }
}
