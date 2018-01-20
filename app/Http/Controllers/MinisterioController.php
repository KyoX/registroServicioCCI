<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ministerio;

class MinisterioController extends Controller
{
    public function index(){
        $ministerios = DB::table('ministerios')->get();

        return view('layouts/ministerios', compact('ministerios'));
    }

    public function show($id){
        if($id>0){
            $ministerio = DB::table('ministerios')->where('ministerio_id', $id)->first();
        }else{
            $ministerio = new Ministerio();
        }
        return view('layouts/ministerios_show', compact('ministerio'));
    }

    public function store(Request $request){

	    $this->validate(request(),[
		    'nombre_ministerio' => 'required|max:190',
	    ]);

        if($request['ministerio_id']==null){
            Ministerio::create(request(['ministerio_id','nombre_ministerio']));

            return redirect('/ministerios');
        }else{
            Ministerio::where('ministerio_id', $request['ministerio_id'])
                        ->update(['nombre_ministerio' => $request['nombre_ministerio']]);;

            return redirect('/ministerios');
        }

    }

    public function destroy($id){
        Ministerio::where('ministerio_id', $id)->delete();
        return redirect('/ministerios');
    }
}
