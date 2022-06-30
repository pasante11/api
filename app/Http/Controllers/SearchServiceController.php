<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchServiceController extends Controller
{
    //
    public function search(Request $request)
    {
        $pi = $request->input("pi");
        $manzana = $request->input("manzana");
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
