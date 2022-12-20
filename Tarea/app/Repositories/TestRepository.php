<?php

namespace App\Repositories;

use App\Models\Perro;
use App\Models\Interaccion;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class TestRepository
{
    public function guardarPerros($request)
    {
        $perros = Perro::create([
            "per_nombre" => $request->nombre,
            "per_descripcion" => $request->descripcion,
            "per_urlfoto" => $request->urlfoto,
        ]);

        return response()->json(["perros" => $perros], Response::HTTP_OK);
    }

    public function actualizarPerro($request)
    {
        try{
            $perros = Perro::finforFail($request->id);
            isset($request->nombre) && $perro->per_nombre = $request->nombre;
            $perro->save();

            $perros = Perro::where('id',$request->id)
            ->update([
                'per_descripcion' => $request->descripcion,
                'per_urlfoto' => $request->urlfoto,
            ]);

            return response()->json(["perros" => $perros], Response::HTTP_OK);
        }catch (Exception $e) {
            Log::info([
                "error" => $e,
                "mensaje" =>  $e->getMessage(),
                "linea" =>  $e->getLine(),
                "archivo" =>  $e->getFile(),
            ]);
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }


    public function eliminarPerro($request)
    {
        try{
            $perros = Perro::find($request->id)->delete();

            return response()->json(["perros" => $perros], Response::HTTP_OK);
        }catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    public function listarPerros()
    {
        $perros = Perro::all();
        return response()->json(["perros" => $perros], Response::HTTP_OK);
    }
}