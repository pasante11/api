<?php

namespace App\Http\Controllers;

//use App\Models\Terrenos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerrenosController extends Controller
{
    public function index()
    {
        //
        //sreturn Terrenos::all();
        // $id=30004;
        // return Terrenos::where('id', $id)->get();
        $link = mysqli_connect('mysql.parqueindustrial.libreta.net', 'parquejacque', 'ScparqueSc', 'dicbd');      
        $sql = 
        "SELECT terrenos.pi
        FROM terrenos";
        //$terrenos = DB::select($sql);
        $terrenos = mysqli_query($link,$sql);
        return response()->json($terrenos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    public function store(Request $request)
    {
        //
        // $terrenos = new Terrenos;
        // $terrenos-> id = $request->id;
        // $terrenos-> pi = $request->pi;
        // $terrenos-> manzana = $request->manzana;
        // $terrenos-> numlo = $request->numlo;
        // $terrenos->save();
        // return response()->json($terrenos, 200);

        $request->validate([
            'pi' => 'required',
            'manzana' => 'required',
            'numlote' => 'required'
        ]);
        return Terrenos::create($request->all());
    }

    public function show($pi)
    {
        $sql = 
        "SELECT terrenos.pi, terrenos.manzana, terrenos.numlote 
        FROM terrenos 
        WHERE terrenos.pi=$pi";
        $terrenos = DB::select($sql);

        if(!empty($terrenos))
        {
            return response()->json($terrenos);
        }
        else
        {
            return response()->json([
                "message" => "terrenos no encontrado"
            ], 404);
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Terrenos  $terrenos
     * @return \Illuminate\Http\Response
     */
    // public function edit(Terrenos $terrenos)
    // {
    //     //
    // }

    public function update(Request $request, $id)
    {
        //
        // if(Terrenos::where('id', $id)->exists()) {
        //     $terrenos = Terrenos::find($id);
        //     $terrenos->update($request->all());
        //     return response()->json($terrenos, 202);
        // } else {
        //     return response()->json(["message" => "Terrenos not found"], 404);
        // }
        $terrenos = Terrenos::find($id);
        $terrenos->update($request->all());
        return $terrenos;
    }

    public function destroy($id)
    {
        // if(Terrenos::where('id', $id)->exists()) {
        //     $terrenos = Terrenos::find($id);
        //     $terrenos->delete();
        //     return response()->json($terrenos, 202);
        // } else {
        //     return response()->json(["message" => "Terreno not found"], 404);
        // }
        // $terrenos = Terrenos::findOrfail($id);
        // $terrenos->delete();

        // return response()->json(null, 204);
        return Terrenos::destroy($id);
    }
    //buscar
    // public function search($id)
    // {
    //     return Terrenos::where('id', '%'.$id.'%')->get();
    // }
}
