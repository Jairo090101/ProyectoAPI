<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditarTareaRequest;
use App\Http\Requests\GuardarTareaRequest;
use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Http\Resources\TareaResource;

class TareaController extends Controller
{
    //Método para obtención de datos
    public function index()
    {
        return TareaResource::collection(Tarea::all());
    }

    //Metodo para guardar un nuevo registro o tarea
    public function store(GuardarTareaRequest $request)
    {
        $tarea = Tarea::create($request->validated());
        return response()->json([
            'mensaje' => 'Tarea creada correctamente.',
            'tarea' => new TareaResource($tarea),
        ], 201); // Código HTTP 201 = Created
    }


    public function show(Tarea $tarea)
    {
        return new TareaResource($tarea);
    }

    //Método para actualización de registro
    public function update(EditarTareaRequest $request, Tarea $tarea)
    {
        $tarea->update($request->validated());


        return response()->json([
            'mensaje' => 'Tarea actualizada correctamente.',
            'tarea' => new TareaResource($tarea),
        ], 200);
    }

    //Método para eliminación de registro
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return response()->json(null, 204);
    }
}
