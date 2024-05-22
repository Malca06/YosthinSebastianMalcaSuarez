<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Http\Requests\EntradaRequest;
use App\Models\Vehiculo;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $registros = Entrada::whereHas('vehiculo', function ($query) use ($texto) {
            $query->where('placa', 'like', '%' . $texto . '%');
        })->paginate(10);
        return view('entrada.index', compact('registros', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entrada = new Entrada();
        $vehiculos = Vehiculo::all();
        return view('entrada.action', ['entrada' => $entrada, 'vehiculos' => $vehiculos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntradaRequest $request)
    {
        $registro = new Entrada;
        $registro->placa = $request->input('placa');
        $registro->fecha = $request->input('fecha');
        $registro->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Registro creado satisfactoriamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrada $entrada)
    {
        return "Mostrar";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $entrada = Entrada::findOrFail($id);
        $vehiculos = Vehiculo::all();
        return view('entrada.action', compact('entrada', 'vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EntradaRequest $request, $id)
    {
        $entrada = Entrada::findOrFail($id);
        $entrada->placa = $request->placa;
        $entrada->fecha = $request->fecha;
        $entrada->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Actualización de datos satisfactoria'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = Entrada::findOrFail($id);
        $registro->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Registro eliminado'
        ]);
    }
}
