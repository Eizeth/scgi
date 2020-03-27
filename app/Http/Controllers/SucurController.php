<?php

namespace bodega\Http\Controllers;

use Illuminate\Http\Request;
use bodega\sucursal;
use bodega\Http\Requests\StoreSucursalRequest;


class SucurController extends Controller
{
   
    public function index(Request $request)
    {
        $sucursal = sucursal::all();

       return view('sucursal.mostrarsucur', compact('sucursal'));
    }

    
    public function create()
    {
      return view('sucursal.altasucursal');
    }

    
    public function store(StoreSucursalRequest $request)
    {

        $sucursal = new sucursal();
        $sucursal->snom = $request->input('snom');
        $sucursal->sencar = $request->input('sencar');
        $sucursal->sdir = $request->input('sdir');
        $sucursal->stel = $request->input('stel');
       
        $sucursal->save();

       return redirect()->route('sucursal.mostrarsucur');
    }

    public function show(sucursal $sucursal)
    {
<<<<<<< HEAD
       // return $sucursal;
=======
        // print_r($sucursal);
>>>>>>> 10df75853d46945a99d4100608fef994934b0615
        return view ('sucursal.show', compact('sucursal'));
    }

   
    public function edit(sucursal $sucursal)
    {
        return view('sucursal.edit',compact('sucursal'));
    }

    
    public function update(StoreSucursalRequest $request, sucursal $sucursal)
    {
        $sucursal->fill($request->all());
        $sucursal->save();
       //return 'Actualizado';
      return redirect()->route('sucursal.show',[$sucursal])->with('status','Se actualizo correctamente');
    }

    
    public function destroy(sucursal $sucursal)
    {
        $sucursal->delete();
<<<<<<< HEAD
         return redirect()->route('sucursal.index');
=======
        return redirect()->route('sucursal.mostrarsucur');
>>>>>>> 10df75853d46945a99d4100608fef994934b0615
    }
}
