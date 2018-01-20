<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Servidor;

class ServidorController extends Controller
{
    public function index(){
        return DB::table('servidores')->orderBy('nombre', 'asc')->get();
    }
}
