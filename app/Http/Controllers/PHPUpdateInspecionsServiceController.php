<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PHPUpdateInspecionsServiceController extends Controller
{
    //
    public function updateInspeccions(Request $request)
    {
    $idTerreno = $request->input("idTerreno");
    $latitud = $request->input("latitud");
    $longitud = $request->input("longitud");
    $acceso = $request->input("acceso");
    $oPaquete = [
                'message' => 'success',
                'values' => null
            ];
    try
          {
              $sql ="UPDATE inspeccions SET inspeccions.lat = '$latitud' and inspeccions.long = '$longitud', inspeccions.acceso = '$acceso' WHERE inspeccions.terreno_id ='$idTerreno'";
              $inspeccions = DB::table('inspeccions')
                                 ->where('terreno_id', $idTerreno)
                                 ->update(['lat'=>$latitud,'long'=>$longitud, 'acceso' => $acceso]);
              
              $sql1 ="SELECT inspeccions.lat, inspeccions.long, inspeccions.acceso  FROM inspeccions WHERE inspeccions.terreno_id='$idTerreno'";
              $resultado = DB::select($sql1);

              if (!empty($resultado))
              {
                  $oPaquete["message"] = "Datos actualizados exitosamente";
                  $oPaquete["values"] = $resultado[0];
              }else{
                  $oPaquete["message"] = "No existe el dato";
                  $oPaquete["values"] = null;
              }
          }catch (\Throwable $ex){
              $oPaquete["message"] = "No se pudo realizar la acción, por favor intente de nuevo.";
              $oPaquete["values"] = null;
          }

          return response()->json(
              $oPaquete
          ); 
   }

   public function updateInspeccionsDatosGenerales(Request $request)
   {
   $idTerreno = $request->input("idTerreno");
   $horario = $request->input("horario");
   $replegalposeedor = $request->input("replegalposeedor");
   $telefonoposeedor = $request->input("telefonoposeedor");
   $emailposeedor = $request->input("emailposeedor");
   $nit = $request->input("nit");
   $registrocomercio = $request->input("registrocomercio");
   $oPaquete = [
               'message' => 'success',
               'values' => null
           ];
   try
         {
             $sql ="UPDATE inspeccions SET inspeccions.lat = '$latitud' and inspeccions.long = '$longitud', inspeccions.acceso = '$acceso' WHERE inspeccions.terreno_id ='$idTerreno'";
             $inspeccions = DB::table('inspeccions')
                                ->where('terreno_id', $idTerreno)
                                ->update(['horario'=>$horario,'replegalposeedor'=>$replegalposeedor, 'telefonoposeedor' => $telefonoposeedor, 'emailposeedor' => $emailposeedor, 'nit' => $nit, 'registrocomercio' => $registrocomercio]);
             
             $sql1 ="SELECT inspeccions.horario, inspeccions.replegalposeedor, inspeccions.telefonoposeedor, inspeccions.emailposeedor, inspeccions.nit, inspeccions.registrocomercio FROM inspeccions WHERE inspeccions.terreno_id = '$idTerreno'";
             $resultado = DB::select($sql1);

             if (!empty($resultado))
             {
                 $oPaquete["message"] = "Datos actualizados exitosamente";
                 $oPaquete["values"] = $resultado[0];
             }else{
                 $oPaquete["message"] = "No existe el dato";
                 $oPaquete["values"] = null;
             }
         }catch (\Throwable $ex){
             $oPaquete["message"] = "No se pudo realizar la acción, por favor intente de nuevo.";
             $oPaquete["values"] = null;
         }

         return response()->json(
             $oPaquete
         ); 
  }
}
