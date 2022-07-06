<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PHPSearchServiceInspeccionsController extends Controller
{
    //buscador idTerreno
    public function searchInspeccions(Request $request)
    {
        $idTerreno = $request->input("idTerreno");
        
        $sql = 
        "SELECT inspeccions.nombreposeedor, inspeccions.telefonoposeedor, inspeccions.registrocomercio,inspeccions.lat, inspeccions.long,inspeccions.acceso
        FROM inspeccions 
        WHERE inspeccions.terreno_id=$idTerreno";
        $inspeccions = DB::select($sql);
        if(!empty($inspeccions))
        {
            return response()->json($inspeccions);
        }
        else
        {
            return response()->json(["message" => "Inspeccion no encontrado"], 404);
        }
    }
}
