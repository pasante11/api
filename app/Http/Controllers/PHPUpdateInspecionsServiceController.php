<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PHPUpdateInspecionsServiceController extends Controller
{
    //Datos Generales
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
   //Datos Generales
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
             $sql ="UPDATE inspeccions SET inspeccions.horario = '$horario' and inspeccions.replegalposeedor = '$replegalposeedor' and inspeccions.telefonoposeedor = '$telefonoposeedor' and  inspeccions.emailposeedor =  '$emailposeedor' and inspeccions.nit = '$nit' and inspeccions.registrocomercio = '$registrocomercio'  WHERE inspeccions.terreno_id ='$idTerreno'";
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
  //Datos Ocupacion Terreno
  public function updateInspeccionsDatosOcupacionTerreno(Request $request)
   {
   $idTerreno = $request->input("idTerreno");
   $rai = $request->input("rai");
   $psst = $request->input("psst");
   $licenciambiental = $request->input("licenciambiental");
   $medidorcre = $request->input("medidorcre");
   $medidorsaguapac = $request->input("medidorsaguapac");
   $propietaria = $request->input("propietaria");
   $oPaquete = [
               'message' => 'success',
               'values' => null
           ];
   try
         {
             $sql ="UPDATE inspeccions SET inspeccions.rai = '$rai' and inspeccions.psst = '$psst' and inspeccions.licenciambiental = '$licenciambiental' and  inspeccions.medidorcre =  '$medidorcre' and inspeccions.medidorsaguapac = '$medidorsaguapac' and inspeccions.propietaria = '$propietaria'  WHERE inspeccions.terreno_id ='$idTerreno'";
             $inspeccions = DB::table('inspeccions')
                                ->where('terreno_id', $idTerreno)
                                ->update(['rai'=>$rai,'psst'=>$psst, 'licenciambiental' => $licenciambiental, 'medidorcre' => $medidorcre, 'medidorsaguapac' => $medidorsaguapac, 'propietaria' => $propietaria]);
             
             $sql1 ="SELECT inspeccions.rai, inspeccions.psst, inspeccions.licenciambiental, inspeccions.medidorcre, inspeccions.medidorsaguapac, inspeccions.propietaria FROM inspeccions WHERE inspeccions.terreno_id = '$idTerreno'";
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
             $oPaquete["message"] = "No se pudo realizar la acción en la funcion actualizar datos de ocupacion del terreno, por favor intente de nuevo.";
             $oPaquete["values"] = null;
         }

         return response()->json(
             $oPaquete
         ); 
  }
  //Datos Ocupacion Terreno
  public function updateInspeccionsDatosOcupacionTerrenoPageDos(Request $request)
    {
    $idTerreno = $request->input("idTerreno");
    $condicionposeedor = $request->input("condicionposeedor");
    $nombredelpersonal = $request->input("nombredelpersonal");
    $telefonopersonal = $request->input("telefonopersonal");
    $observacionentrevista = $request->input("observacionentrevista");
    $oPaquete = [
                'message' => 'success',
                'values' => null
            ];
    try
          {
              $sql ="UPDATE inspeccions SET inspeccions.condicionposeedor = '$condicionposeedor' and inspeccions.nombredelpersonal = '$nombredelpersonal', inspeccions.telefonopersonal = '$telefonopersonal', inspeccions.observacionentrevista = '$observacionentrevista' WHERE inspeccions.terreno_id ='$idTerreno'";
              $inspeccions = DB::table('inspeccions')
                                 ->where('terreno_id', $idTerreno)
                                 ->update(['condicionposeedor'=>$condicionposeedor,'nombredelpersonal'=>$nombredelpersonal, 'telefonopersonal' => $telefonopersonal, 'observacionentrevista' => $observacionentrevista]);
              
              $sql1 ="SELECT inspeccions.condicionposeedor,inspeccions.nombredelpersonal, inspeccions.telefonopersonal, inspeccions.observacionentrevista FROM inspeccions WHERE inspeccions.terreno_id='$idTerreno'";
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
   //Datos Actividad Economica Industrial 
   public function updateInspeccionsDatosActividadEconomicaIndustrial(Request $request)
   {
   $idTerreno = $request->input("idTerreno");
   $actividadindustrial = $request->input("actividadindustrial");
   $tipoactividadterreno = $request->input("tipoactividadterreno");
   $tamanoempresa = $request->input("tamanoempresa");
   $cantidadempleados = $request->input("cantidadempleados");
   $mujeres = $request->input("mujeres");
   $oPaquete = [
               'message' => 'success',
               'values' => null
           ];
   try
         {
             $sql ="UPDATE inspeccions SET inspeccions.actividadindustrial = '$actividadindustrial' and inspeccions.tipoactividadterreno = '$tipoactividadterreno', inspeccions.tamanoempresa = '$tamanoempresa', inspeccions.cantidadempleados = '$cantidadempleados', inspeccions.mujeres = '$mujeres' WHERE inspeccions.terreno_id ='$idTerreno'";
             $inspeccions = DB::table('inspeccions')
                                ->where('terreno_id', $idTerreno)
                                ->update(['actividadindustrial'=>$actividadindustrial,'tipoactividadterreno'=>$tipoactividadterreno, 'tamanoempresa' => $tamanoempresa, 'cantidadempleados' => $cantidadempleados, 'mujeres' => $mujeres]);
             
             $sql1 ="SELECT inspeccions.actividadindustrial,inspeccions.tipoactividadterreno, inspeccions.tamanoempresa, inspeccions.cantidadempleados, inspeccions.mujeres FROM inspeccions WHERE inspeccions.terreno_id ='$idTerreno'";
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
   //Datos Actividad Economica Industrial Page Dos
   public function updateInspeccionsDatosActividadEconomicaIndustrialPageDos(Request $request)
   {
   $idTerreno = $request->input("idTerreno");
   $hombres = $request->input("hombres");
   $productoselaborados = $request->input("productoselaborados");
   $infraestructura = $request->input("infraestructura");
   $oPaquete = [
               'message' => 'success',
               'values' => null
           ];
   try
         {
             $sql ="UPDATE inspeccions SET inspeccions.hombres = '$hombres' and inspeccions.productoselaborados = '$productoselaborados', inspeccions.infraestructura = '$infraestructura' WHERE inspeccions.terreno_id ='$idTerreno'";
             $inspeccions = DB::table('inspeccions')
                                ->where('terreno_id', $idTerreno)
                                ->update(['hombres'=>$hombres,'productoselaborados'=>$productoselaborados, 'infraestructura' => $infraestructura]);
             
             $sql1 ="SELECT inspeccions.hombres,inspeccions.productoselaborados, inspeccions.infraestructura FROM inspeccions WHERE inspeccions.terreno_id ='$idTerreno'";
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
  //Datos Actividad Infraestructura Industria
  public function updateInspeccionsDatosInfraestructuraIndustria(Request $request)
  {
  $idTerreno = $request->input("idTerreno");
  $tipoinfraestructura = $request->input("tipoinfraestructura");
  $etapainfraestructura = $request->input("etapainfraestructura");
  $oPaquete = [
              'message' => 'success',
              'values' => null
          ];
  try
        {
            $sql ="UPDATE inspeccions SET inspeccions.tipoinfraestructura = '$tipoinfraestructura' and inspeccions.etapainfraestructura = '$etapainfraestructura' WHERE inspeccions.terreno_id ='$idTerreno'";
            $inspeccions = DB::table('inspeccions')
                               ->where('terreno_id', $idTerreno)
                               ->update(['tipoinfraestructura'=>$tipoinfraestructura,'etapainfraestructura'=>$etapainfraestructura]);
            
            $sql1 ="SELECT inspeccions.tipoinfraestructura, inspeccions.etapainfraestructura
                    FROM inspeccions 
                    WHERE inspeccions.terreno_id='$idTerreno'";
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
 //Datos Actividad Infraestructura Industria
 public function updateInspeccionsDatosInfraestructuraIndustriaPageDos(Request $request)
 {
 $idTerreno = $request->input("idTerreno");
 $tipocerramiento = $request->input("tipocerramiento");
 $retirofeverificado = $request->input("retirofeverificado");
 $retirofoverificado = $request->input("retirofoverificado");
 $retirolaizqverificado = $request->input("retirolaizqverificado");
 $retiroladerverificado = $request->input("retiroladerverificado");
 $oPaquete = [
             'message' => 'success',
             'values' => null
         ];
 try
       {
           $sql ="UPDATE inspeccions SET inspeccions.tipocerramiento = '$tipocerramiento' and inspeccions.retirofeverificado = '$retirofeverificado' and inspeccions.retirofoverificado = '$retirofoverificado' and inspeccions.retirolaizqverificado = '$retirolaizqverificado' and inspeccions.retiroladerverificado = '$retiroladerverificado' WHERE inspeccions.terreno_id ='$idTerreno'";
           $inspeccions = DB::table('inspeccions')
                              ->where('terreno_id', $idTerreno)
                              ->update(['tipocerramiento'=>$tipocerramiento, 'retirofeverificado'=>$retirofeverificado, 'retirofoverificado' => $retirofoverificado, 'retirolaizqverificado' => $retirolaizqverificado, 'retiroladerverificado' => $retiroladerverificado]);
           
           $sql1 ="SELECT inspeccions.tipocerramiento, inspeccions.retirofeverificado, inspeccions.retirofoverificado,inspeccions.retirolaizqverificado, inspeccions.retiroladerverificado 
           FROM inspeccions
           WHERE inspeccions.terreno_id='$idTerreno'";
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
//Datos Actividad Infraestructura Industria
public function updateInspeccionsDatosInfraestructuraIndustriaPageTres(Request $request)
  {
  $idTerreno = $request->input("idTerreno");
  $tipodeinvasion = $request->input("tipodeinvasion");
  $viasdeacceso = $request->input("viasdeacceso");
  $oPaquete = [
              'message' => 'success',
              'values' => null
          ];
        try
        {
            $sql ="UPDATE inspeccions SET inspeccions.tipodeinvasion = '$tipodeinvasion' and inspeccions.viasdeacceso = '$viasdeacceso' WHERE inspeccions.terreno_id ='$idTerreno'";
            $inspeccions = DB::table('inspeccions')
                               ->where('terreno_id', $idTerreno)
                               ->update(['tipodeinvasion'=>$tipodeinvasion,'viasdeacceso'=>$viasdeacceso]);
            
            $sql1 ="SELECT inspeccions.tipodeinvasion, inspeccions.viasdeacceso FROM inspeccions WHERE inspeccions.terreno_id ='$idTerreno'";
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
//Datos Actividad Infraestructura Industria
public function updateInspeccionsDatosInfraestructuraIndustriaPageCuatro(Request $request)
  {
  $idTerreno = $request->input("idTerreno");
  $agua = $request->input("agua");
  $alcantarillado = $request->input("alcantarillado");
  $pozo = $request->input("pozo");
  $luz = $request->input("luz");
  $alumbradopublico = $request->input("alumbradopublico");
  $gas = $request->input("gas");
  $internet = $request->input("internet");
  $numautorizacionpozo = $request->input("numautorizacionpozo");
  $oPaquete = [
              'message' => 'success',
              'values' => null
          ];
    try
        {
            $sql ="UPDATE inspeccions 
            SET inspeccions.agua = '$agua' and inspeccions.alcantarillado = '$alcantarillado' and inspeccions.pozo = '$pozo' and inspeccions.luz = '$luz' and inspeccions.alumbradopublico = '$alumbradopublico' and inspeccions.gas = '$gas' and inspeccions.internet = '$internet' and inspeccions.numautorizacionpozo = '$numautorizacionpozo' WHERE inspeccions.terreno_id ='$idTerreno'";
            $inspeccions = DB::table('inspeccions')
                               ->where('terreno_id', $idTerreno)
                               ->update([
                                'agua' => $agua,
                                'alcantarillado' => $alcantarillado,
                                'pozo' => $pozo,
                                'luz' => $luz,
                                'alumbradopublico' => $alumbradopublico,
                                'gas' => $gas,
                                'internet' => $internet ,
                                'numautorizacionpozo' => $numautorizacionpozo
                            ]);
            
            $sql1 ="SELECT inspeccions.agua, inspeccions.alcantarillado, inspeccions.pozo, inspeccions.luz, inspeccions.alumbradopublico, inspeccions.gas, inspeccions.internet, inspeccions.numautorizacionpozo FROM inspeccions WHERE inspeccions.terreno_id = '$idTerreno'";
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
//ELIMINACION RESIDUOS
public function updateInspeccionsEliminarResiduos(Request $request)
{
$idTerreno = $request->input("idTerreno");
$empresacontratobasura = $request->input("empresacontratobasura");
$residuossolidos = $request->input("residuossolidos");
$residuosliquidos = $request->input("residuosliquidos");
$oPaquete = [
            'message' => 'success',
            'values' => null
        ];
try
      {
          $sql ="UPDATE inspeccions SET inspeccions.empresacontratobasura = '$empresacontratobasura' and inspeccions.residuossolidos = '$residuossolidos', inspeccions.residuosliquidos = '$residuosliquidos' WHERE inspeccions.terreno_id ='$idTerreno'";
          $inspeccions = DB::table('inspeccions')
                             ->where('terreno_id', $idTerreno)
                             ->update(['empresacontratobasura'=>$empresacontratobasura,'residuossolidos'=>$residuossolidos, 'residuosliquidos' => $residuosliquidos]);
          
          $sql1 ="SELECT inspeccions.empresacontratobasura, inspeccions.residuossolidos, inspeccions.residuosliquidos
          FROM inspeccions WHERE inspeccions.terreno_id ='$idTerreno'";
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
//ELIMINACION RESIDUOS 
public function updateInspeccionsEliminarResiduosPageDos(Request $request)
{
$idTerreno = $request->input("idTerreno");
$residuosgaseosos = $request->input("residuosgaseosos");
$obs = $request->input("obs");
$archivo = $request->input("archivo");
$oPaquete = [
            'message' => 'success',
            'values' => null
        ];
try
      {
          $sql ="UPDATE inspeccions SET inspeccions.residuosgaseosos = '$residuosgaseosos' and inspeccions.obs = '$obs', inspeccions.archivo = '$archivo' WHERE inspeccions.terreno_id ='$idTerreno'";
          $inspeccions = DB::table('inspeccions')
                             ->where('terreno_id', $idTerreno)
                             ->update(['residuosgaseosos'=>$residuosgaseosos,'obs'=>$obs, 'archivo' => $archivo]);
          
          $sql1 ="SELECT inspeccions.residuosgaseosos, inspeccions.obs, inspeccions.archivo
          FROM inspeccions WHERE inspeccions.terreno_id ='$idTerreno'";
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
/*
SELECT inspeccions.empresacontratobasura, inspeccions.residuossolidos, inspeccions.residuosliquidos
FROM inspeccions WHERE inspeccions.terreno_id=560001;

SELECT inspeccions.residuosgaseosos, inspeccions.obs, inspeccions.archivo
FROM inspeccions WHERE inspeccions.terreno_id=560001;  
*/
}
