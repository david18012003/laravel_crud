<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleado.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleados = new Empleado();
        $empleados->nombre = $request->get('nombre');
        $empleados->cedula = $request->get('cedula');
        $empleados->direccion = $request->get('direccion');
        $empleados->telefono = $request->get('telefono');

        $empleados->save();

        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.edit')->with('empleado',$empleado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->nombre = $request->get('nombre');
        $empleado->cedula = $request->get('cedula');
        $empleado->direccion = $request->get('direccion');
        $empleado->telefono = $request->get('telefono');

        $empleado->save();

        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect('/empleados');
    }
}
