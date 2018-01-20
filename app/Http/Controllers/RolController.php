<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rol;

class RolController extends Controller
{
    public function index(){
        return DB::table('roles')->orderBy('nombre_rol', 'asc')->get();
    }

}
