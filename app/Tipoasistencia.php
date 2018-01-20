<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoasistencia extends Model
{
    public function obtener_historial_servidorhistorialservidor(){
        return $this->hasMany(historialservidor::class);
    }
}
