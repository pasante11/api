<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PHPGetListadoController extends Controller
{
    //
    public function getPI(Request $request){
        $oPaquete = [
            'message' => 'success',
            'lista'=> []
        ];
    try
      {
          $sql ="SELECT DISTINCT  terrenos.pi FROM terrenos, inspeccions WHERE inspeccions.terreno_id=terrenos.id";
          $resultado = DB::select($sql);

          if (!empty($resultado))
          {
              $oPaquete["message"] = "Datos obtenidos exitosamente";
              $oPaquete["lista"] = [$resultado];
          }else{
              $oPaquete["message"] = "No existe el dato";
              $oPaquete["lista"] = [];
          }
      }catch (\Throwable $ex){
          $oPaquete["message"] = "No se pudo realizar la acción, por favor intente de nuevo.";
          $oPaquete["lista"] = [];
      }

      return response()->json(
          $oPaquete
      ); 
    }

    public function getListado(Request $request)
    {
      $pi = $request->input("pi");
      $oPaquete = [
                  'message' => 'success',
                  'values' => null
              ];
      try
            {
                // $sql ="SELECT terrenos.pi, terrenos.manzana, terrenos.numlote, inspeccions.fecha 
                // FROM terrenos, inspeccions 
                // WHERE terrenos.pi='$pi' and terrenos.manzana='$manzana' and terrenos.numlote='$lote'";
                
                // $sql ="SELECT terrenos.pi, terrenos.manzana, terrenos.numlote
                // FROM terrenos 
                // WHERE terrenos.pi='$pi'";

                $sql ="SELECT terrenos.pi, terrenos.manzana, terrenos.numlote, inspeccions.fecha
                FROM terrenos, inspeccions
                WHERE terrenos.pi='$pi' and terrenos.id=inspeccions.terreno_id";
                //ORDER BY inspeccions.fecha

                // $sql ="SELECT terrenos.pi, terrenos.manzana, terrenos.numlote, inspeccions.fecha 
                // FROM terrenos, inspeccions 
                // WHERE terrenos.pi='$pi'
                // GROUP BY terrenos.manzana
                // HAVING COUNT(*) > 1
                // ORDER BY terrenos.manzana";

                $resultado = DB::select($sql);
                if (!empty($resultado))
                {
                    $oPaquete["message"] = "Datos obtenidos exitosamente";
                    $oPaquete["values"] = $resultado;
                }else{
                    $oPaquete["message"] = "No existe el dato";
                    $oPaquete["values"] = [];
                }
            }catch (\Throwable $ex){
                $oPaquete["message"] = "No se pudo realizar la acción, por favor intente de nuevo.";
                $oPaquete["values"] = [];
            }
    
            return response()->json(
                $oPaquete
            );  
   }
}
