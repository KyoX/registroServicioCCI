<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Servidor;

class ServidorController extends Controller
{
    public function index(){
        $servidores = DB::table('servidors')->get();

        return view('layouts/servidores', compact('servidores'));
    }

    public function show($id){
        if($id>0){
            $servidores = DB::table('servidors')->where('servidor_id', $id)->first();
        }else{
            $servidores = new Servidor();
        }
        return view('layouts/servidores_show', compact('servidores'));
    }

    public function store(Request $request){

	    $this->validate(request(),[
		    'nombre' => 'required|max:190',
		    'correo' => 'max:190',
		    'telefono' => 'max:8',
	    ]);

        if($request['servidor_id']==null){
            Servidor::create(request(['servidor_id','nombre','correo','telefono']));

            return redirect('/servidores');
        }else{
            Servidor::where('servidor_id', $request['servidor_id'])
                        ->update(
                            [
                                'nombre' => $request['nombre'],
                                'correo' => $request['correo'],
                                'telefono' => $request['telefono']
                            ]
                        );;

            return redirect('/servidores');
        }

    }

    public function destroy($id){
        Servidor::where('servidor_id', $id)->delete();
        return redirect('/servidores');
    }
}
