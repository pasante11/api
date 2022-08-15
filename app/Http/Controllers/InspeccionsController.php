<?php

namespace App\Http\Controllers;

//use App\Models\Terrenos;
use Illuminate\Http\Request;
use App\Models\Inspeccions;
use Illuminate\Support\Facades\DB;

class InspeccionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sql ="SELECT *  FROM inspeccions";
        // $resultado = DB::select($sql);
        // return  response()->json( 
        //     array(
        //         'message' => 'success',
        //         'values' => $resultado[3]
        //     ),200
        // ); 
      
        $oPaquete = [
                    'message' => 'success',
                    'values' => null
                ];
        try
              {
                  $sql ="SELECT inspeccions.id ,inspeccions.terreno_id, inspeccions.fecha  FROM inspeccions";
                  $resultado = DB::select($sql);

                  $sqlTotal = "SELECT COUNT(inspeccions.id) AS Count FROM inspeccions";
                  $total = DB::select($sqlTotal);

                  if (!empty($resultado))
                  {
                      $oPaquete["message"] = "Datos actualizados exitosamente";
                      $oPaquete["values"] = $resultado;
                    //   $oPaquete["values"] = array(
                    //     'id1'=>$resultado[0],
                    //     'id2'=>$resultado[1],
                    //     'id3'=>$resultado[2]
                    //     );
                  }else{
                      $oPaquete["message"] = "No existe el dato del la inspeccions";
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "terreno_id" => 'required',
            "user_id" => 'required',
            "nro" => 'required',
            "fecha" => 'required',
            "tipo" => 'required',
            "acceso" => 'required',
            "lat" => 'required',
            "long" => 'required',
            "nombreposeedor" => 'required',
            "telefonoposeedor" => 'required',
            "emailposeedor" => 'required',
            "replegalposeedor" => 'required',
            "horario" => 'required',
            "nit" => 'required',
            "registrocomercio" => 'required',
            "rai" => 'required',
            "psst" => 'required',
            "licenciambiental" => 'required',
            "medidorcre" => 'required',
            "medidorsaguapac" => 'required',
            "propietaria" => 'required',
            "condicionposeedor" => 'required',
            "nombredelpersonal" => 'required',
            "telefonopersonal" => 'required',
            "actividadindustrial" => 'required',
            "tipoactividadterreno"=> 'required',
            "tamanoempresa" => 'required',
            "cantidadempleados" => 'required',
            "hombres" => 'required',
            "mujeres" => 'required',
            "productoselaborados" => 'required',
            "infraestructura" => 'required',
            "tipoinfraestructura" => 'required',
            "etapainfraestructura" => 'required',
            "cerramiento" => 'required',
            "tipocerramiento" => 'required',
            "invasionretiros" => 'required',
            "tipodeinvasion" => 'required',
            "retirofeverificado" => 'required',
            "retirofoverificado" => 'required',
            "retirolaizqverificado" => 'required',
            "retiroladerverificado" => 'required',
            "viasdeacceso" => 'required',
            "agua" => 'required',
            "luz" => 'required',
            "alcantarillado" => 'required',
            "gas" => 'required',
            "pozo" => 'required',
            "internet" => 'required',
            "numautorizacionpozo" => 'required',
            "recojobasura" => 'required',
            "empresacontratobasura" => 'required',
            "residuossolidos" => 'required',
            "residuosliquidos" => 'required',
            "residuosgaseosos" => 'required',
            "nombreencargadodehse" => 'required',
            "sustanciaspeligrosasverificadas" => 'required',
            "comerciodeenvases" => 'required',
            "emisiondegases" => 'required',
            "archivo" => 'required',
            "obs" => 'required'
        ]);
        return Inspeccions::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inspeccions  $inspeccions
     * @return \Illuminate\Http\Response
     */
    public function show(Inspeccions $inspeccions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inspeccions  $inspeccions
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspeccions $inspeccions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInspeccionsRequest  $request
     * @param  \App\Models\Inspeccions  $inspeccions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInspeccionsRequest $request, Inspeccions $inspeccions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inspeccions  $inspeccions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspeccions $inspeccions)
    {
        //
    }
}
