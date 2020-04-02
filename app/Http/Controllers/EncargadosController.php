<?php

namespace bodega\Http\Controllers;

use bodega\Encargados;
use Illuminate\Http\Request;

class EncargadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $encargados = Encargados::all();

        return view('empleado.index', compact('encargados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $encargados = new Encargados();
       
       $encargados->nom = $request->input('nom');
       $encargados->app = $request->input('app');
       $encargados->apm = $request->input('apm');
       $encargados->telefono = $request->input('telefono');
       
       $encargados->save();
       return view('empleado.show');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \bodega\Encargados  $encargados
     * @return \Illuminate\Http\Response
     */
    public function show(Encargados $encargados)
    {
        return view ('empleado.show', compact('encargados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \bodega\Encargados  $encargados
     * @return \Illuminate\Http\Response
     */
    public function edit(Encargados $encargados)
    {
        return view('empleados.edit',compact('encargados'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \bodega\Encargados  $encargados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encargados $encargados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \bodega\Encargados  $encargados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encargados $encargados)
    {
        //
    }
}
