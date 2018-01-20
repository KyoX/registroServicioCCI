<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Historialservidor;

class HistorialservidorController extends Controller
{
    public function index(){
        return Historialservidor::all();
    }
}
