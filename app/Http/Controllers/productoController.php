<?php

namespace bodega\Http\Controllers;

use Illuminate\Http\Request;
use bodega\producto;
use bodega\Http\Requests\StoreProdRequest;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//$request->user()->authorizeRoles('admin');

      $productos = producto::all();

       return view('altas.mostrarprod', compact('productos'));
    }

   
    public function create()
    {
        return view('altas.altaproducto');
    //   return redirect()->route('common.errors',[$producto])->with('status','Se dio de alta el producto correctamente');
    }

    
    //////////////////////////////////// ALMACENAR
    public function store(StoreProdRequest $request)
    {
          $producto = new producto();


        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
           
         } 
       $producto = new producto();
       $producto->codigo = $request->input('codigo');
       $producto->nom = $request->input('nom');
       $producto->cate = $request->input('cate');
       $producto->neto = $request->input('neto');
       $producto->cant = $request->input('cant');
       $producto->stock = $request->input('stock');
       $producto->formula = $request->input('formula');
       $producto->imagen = $name;
      

       $producto->save();

      return redirect()->route('producto.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
      
    
      return view ('altas.showprod', compact('producto'));


    }

   
    public function edit(producto $producto)
    {
        return view('altas.edit',compact('producto'));
    }

/////////////////////////////////// ACTUALIZAR

    public function update(StoreProdRequest $request, producto $producto)
    {
      $producto->fill($request->except('imagen'));
      if ($request->hasfile('imagen')) {
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $producto->imagen=$name;
            $file->move(public_path().'/images/',$name);
         } 
      $producto->save();
       //return 'Actualizado';
      return redirect()->route('producto.show',[$producto])->with('status','Se actualizo correctamente');
    }

   
/////////////////////////////////////////////ELIMINAR
    public function destroy(producto $producto)
    {
      $file_path = public_path().'/images/'.$producto->imagen;
      \File::delete($file_path);
     
      $producto->delete();
        return redirect()->route('producto.index');
    }
}
