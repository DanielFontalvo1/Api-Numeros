<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operacion;

class OperacionController extends Controller
{
    public function getOperacion(){
        return response()->json(Operacion::all(), 200);
    }

    public function insertOperacion(Request $request){
        $operacion = Operacion::create($request->all());
        
        if(is_null($operacion)){
            return response()->json(["message"=>"no succes"]);
        }
        return response()->json($operacion, 200);
    }

}
