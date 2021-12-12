<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tarifa;
use Illuminate\Http\Request;
use App\Http\Resources\TarifaResource;
use Illuminate\Support\Facades\Validator;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifas = Tarifa::all();
        return response([ 'tarifas' => TarifaResource::collection($tarifas), 'message' => 'Retrieved successfully'], 200);
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
            'titulo' => 'required|max:255',
            'precio' => 'required|max:255',
            'cualidad1' => 'required|max:255',
            'cualidad2' => 'required|max:255',
            'cualidad3' => 'required|max:255',
            'cualidad4' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $tarifa = Tarifa::create($data);

        return response(['tarifa' => new TarifaResource($tarifa), 'message' => 'Created successfully'], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarifa $tarifa)
    {
        return response(['tarifa' => new TarifaResource($tarifa), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarifa $tarifa)
    {
        $tarifa->update($request->all());

        return response(['tarifa' => new TarifaResource($tarifa), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarifa $tarifa)
    {
        $tarifa->delete();

        return response(['message' => 'Deleted']);
    }
}
