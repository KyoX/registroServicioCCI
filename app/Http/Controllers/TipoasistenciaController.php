<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tipoasistencia;

class TipoasistenciaController extends Controller
{
    public function index(){
        Tipoasistencia::all();
    }
}
