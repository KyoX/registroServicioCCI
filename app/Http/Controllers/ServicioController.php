<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Servicio;

class ServicioController extends Controller
{
    public function index(){
        $servicios = DB::table('servicios')->get();

        return view('layouts/servicios', compact('servicios'));
    }

    public function show($fecha){
        if($fecha==0){
            $servicio = new Servicio();
        }else{
            $servicio = DB::table('servicios')->where('fecha_hora_servicio', $fecha)->first();
        }
        return view('layouts/servicios_show', compact('servicio'));
    }

    public function store(Request $request){

	    $this->validate(request(),[
		    'nombre_servicio' => 'required|max:190',
		    'fecha_hora_servicio' => 'required',
	    ]);

        $servicio = DB::table('servicios')->where('fecha_hora_servicio', $request['fecha_hora_servicio'])->first();

        if($servicio==null){
            Servicio::create(request(['fecha_hora_servicio','nombre_servicio']));

            return redirect('/servicios');
        }else{
            Servicio::where('fecha_hora_servicio', $request['fecha_hora_servicio'])
                        ->update(['nombre_servicio' => $request['nombre_servicio']]);;

            return redirect('/servicios');
        }

    }

    public function destroy($fecha){
        Servicio::where('fecha_hora_servicio', $fecha)->delete();
        return redirect('/servicios');
    }
}
