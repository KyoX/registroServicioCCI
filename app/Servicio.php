<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = ['nombre_servicio','fecha_hora_servicio'];

    public function obtener_historial_servidorhistorialservidor(){
        return $this->hasMany(historialservidor::class);
    }
}
