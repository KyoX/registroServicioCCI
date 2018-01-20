<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Equipo;

class EquipoController extends Controller
{
    public function index(){
        return DB::table('equipos')->orderBy('nombre_equipo', 'asc')->get();
    }
}
