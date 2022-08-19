<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PHPGetInspeccionsServiceController extends Controller
{
  //
  public function getDatosHomePage(Request $request){
    $idTerreno = $request->input("idTerreno");
    $oPaquete = [
                'message' => 'success',
                'values' => null
            ];
    try
          {
              $sql =" SELECT terrenos.pi, terrenos.manzana, terrenos.numlote,inspeccions.lat, inspeccions.long, inspeccions.acceso 
              FROM inspeccions, terrenos 
              WHERE inspeccions.terreno_id='$idTerreno' and inspeccions.terreno_id=terrenos.id";
              $resultado = DB::select($sql);
              if (!empty($resultado))
              {
                  $oPaquete["message"] = "Datos obtenidos exitosamente";
                  $oPaquete["values"] = $resultado[0];
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
  public function getInspeccions(Request $request)
  {
    $idTerreno = $request->input("idTerreno");
    $oPaquete = [
                'message' => 'success',
                'values' => null
            ];
    try
          {
              $sql ="SELECT empresas.razonsocial, empresas.telefono, empresas.email
              FROM inspeccions, empresas 
              WHERE inspeccions.terreno_id =  '$idTerreno' AND  empresas.id = (SELECT estados.empresa_id 
                                                                         FROM estados 
                                                                         WHERE estados.terreno_id= '$idTerreno')";
              $resultado = DB::select($sql);
              if (!empty($resultado))
              {
                  $oPaquete["message"] = "Datos obtenidos exitosamente";
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
  public function getListaDeInspeccions(Request $request)
  {
    $idTerreno = $request->input("idTerreno");
    $oPaquete = [
                'message' => 'success',
                'values' => null
            ];
    try
          {
              $sql ="SELECT empresas.razonsocial, empresas.telefono, empresas.email, inspeccions.horario, inspeccions.replegalposeedor, inspeccions.telefonoposeedor, inspeccions.emailposeedor, inspeccions.nit, inspeccions.registrocomercio
              FROM inspeccions, empresas 
              WHERE inspeccions.terreno_id = '$idTerreno' AND  empresas.id = (SELECT estados.empresa_id 
                                                                         FROM estados 
                                                                         WHERE estados.terreno_id= '$idTerreno')";
              $resultado = DB::select($sql);
              if (!empty($resultado))
              {
                  $oPaquete["message"] = "Datos obtenidos exitosamente";
                  $oPaquete["values"] = $resultado[0];
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
