<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//buscar de los terrenos
class SearchServiceController extends Controller
{
    //
    public function search(Request $request)
    {
        $pi = $request->input("pi");
        $manzana = $request->input("manzana");
        //$lote = $request->input("numlote");
        $sql = 
        "SELECT terrenos.numlote 
        FROM terrenos 
        WHERE terrenos.pi=$pi and terrenos.manzana=$manzana";
        $terrenos = DB::select($sql);
        if(!empty($terrenos))
        {
            return response()->json($terrenos);
        }
        else
        {
            return response()->json(["message" => "terrenos no encontrado"], 404);
        }
    }
}
