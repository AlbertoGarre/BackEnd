<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Paquete;
use Illuminate\Http\Request;
use App\Http\Resources\PaqueteResource;
use Illuminate\Support\Facades\Validator;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquete::all();
        return response([ 'paquetes' => PaqueteResource::collection($paquetes), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            
            'g_email' => 'required|max:255',
            'g_remitente' => 'required|max:255',
            'g_telefono' => 'required|max:255',
            'g_nif' => 'required|max:255',
            'g_bultos' => 'required|max:255',
            'r_pais' => 'required|max:255',
            'r_cp' => 'required|max:255',
            'r_poblacion' => 'required|max:255',
            'r_direccion' => 'required|max:255',
            'r_atencion' => 'max:255',
            'r_telefono' => 'required|max:255',
            'r_contacto' => 'required|max:255',
            'r_observaciones' => 'max:255',
            'e_pais' => 'required|max:255',
            'e_cp' => 'required|max:255',
            'e_provincia' => 'required|max:255',
            'e_poblacion' => 'required|max:255',
            'e_direccion' => 'required|max:255',
            'e_numero' => 'required|max:255',
            'e_escalera' => 'max:255',
            'e_planta' => 'max:255',
            'e_puerta' => 'max:255',
            'e_destinatario' => 'required|max:255',
            'e_telefono' => 'required|max:255',
            'e_atencion' => 'max:255',
            'e_observaciones' => 'max:255',
            'tarifa' => 'required|max:255',
            'terminado' => 'required|max:255',
            'tipo_servicio' => 'required|max:255',
            

        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $paquete = Paquete::create($data);

        return response(['paquete' => new PaqueteResource($paquete), 'message' => 'Created successfully'], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function show(Paquete $paquete)
    {
        return response(['paquete' => new PaqueteResource($paquete), 'message' => 'Retrieved successfully'], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paquete $paquete)
    {
        $paquete->update($request->all());

        return response(['paquete' => new PaqueteResource($paquete), 'message' => 'Update successfully'], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paquete $paquete)
    {
        $paquete->delete();

        return response(['message' => 'Deleted']);
    }
}
