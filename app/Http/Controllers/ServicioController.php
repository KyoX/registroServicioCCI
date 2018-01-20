<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Servicio;

class ServicioController extends Controller
{
    public function index(){
        return Servicio::all();
    }
}
