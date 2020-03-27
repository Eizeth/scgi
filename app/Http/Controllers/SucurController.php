<?php

namespace bodega\Http\Controllers;

use Illuminate\Http\Request;
use bodega\sucursal;

class SucurController extends Controller
{
   
    public function index()
    {
        $sucursal = sucursal::all();

       return view('sucursal.mostrarsucur', compact('sucursal'));
    }

    
    public function create()
    {
      return view('sucursal.altasucursal');
    }

    
    public function store(Request $request)
    {
        $sucursal = new sucursal();
        $sucursal->snom = $request->input('snom');
        $sucursal->sencar = $request->input('sencar');
        $sucursal->sdir = $request->input('sdir');
        $sucursal->stel = $request->input('stel');
        $sucursal->save();

       return redirect()->route('sucursal.index');
    }

    public function show(request $request)
    {
        return $request;
        //return view ('sucursal.show', compact('sucursal'));
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, sucursal $sucursal)
    {
        $sucursal->save();
       //return 'Actualizado';
      return redirect()->route('sucursal.show',[$sucursal])->with('status','Se actualizo correctamente');
    }

    
    public function destroy(sucursal $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('sucursal.index');
    }
}
