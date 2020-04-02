<?php

namespace bodega\Http\Controllers;

use bodega\Categorias;
use Illuminate\Http\Request;
use bodega\Http\Requests\StoreCategoriaRequest;

class CategoriasController extends Controller
{
   
    public function index(Request $request)
    { 
     $categorias = Categorias::all();

       return view('categ.index', compact('categorias'));
    }

 


    public function create()
    {
        return view('categ.create');
    }

    


    public function store(Request $request)
    {
        
       $categorias = new Categorias();
        $categorias->catenom = $request->input('catenom');
        
        $categorias->save();

      return redirect()->route('categorias.index');


    }


    public function show(Categorias $categorias)
    {
      
     // return $categoria;

    return view('categ.show', compact('categorias')); 

           }

    public function edit(Categorias $categorias)
    {

        return view('categ.edit',compact('categorias'));
    }



    
    public function update(Request $request, Categorias $categorias)
    {
      $categorias->fill($request->all()); 
      $categorias->save();
       //return 'Actualizado';
      return redirect()->route('categorias.show',[$categorias])->with('status','Se actualizo correctamente');
    }



    public function destroy(Categorias $categorias)
    {
        $categorias->delete();
        return redirect()->route('categorias.index');
    }
}
