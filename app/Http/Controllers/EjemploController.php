<?php

namespace App\Http\Controllers;

use App\Models\Ejemplo;
use App\Http\Requests\StoreEjemploRequest;
use App\Http\Requests\UpdateEjemploRequest;

class EjemploController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ejemplos = Ejemplo::all();
        return view('Ejemplo.listado', compact('ejemplos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ejemplo.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEjemploRequest $request)
    {
        $datos = $request->input();
        $ejemplo = new Ejemplo($datos);
        $ejemplo->save();
        $ejemplos = Ejemplo::all();
        return view('Ejemplo.listado', compact('ejemplos'));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $id = Ejemplo::find($id);
        return view('Ejemplo.edit', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ejemplo $ejemplo)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEjemploRequest $request, int $id)
    {
        $ejemplo = Ejemplo::find($id);
        $ejemplo->update($request->input());
        $ejemplos = Ejemplo::all();
        return view('Ejemplo.listado', compact('ejemplos'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $ejemplo=Ejemplo::find($id);
        $ejemplo->delete();
        $ejemplos = Ejemplo::all();
        return view('Ejemplo.listado', compact('ejemplos'));
    }
}
