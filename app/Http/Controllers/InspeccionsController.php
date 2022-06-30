<?php

namespace App\Http\Controllers;

// use App\Models\Inspeccions;
use Illuminate\Http\Request;
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
        //
        return Inspeccions::all();
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
