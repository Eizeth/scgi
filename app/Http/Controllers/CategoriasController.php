<?php

namespace bodega\Http\Controllers;

use bodega\categorias;
use Illuminate\Http\Request;
use bodega\Http\Requests\StoreCategoriaRequest;

class CategoriasController extends Controller
{
   
    public function index(Request $request)
    { 
     $categorias = categorias::all();

       return view('categ.index', compact('categorias'));
    }

 


    public function create()
    {
        return view('categ.create');
    }


    public function store(StoreCategoriaRequest $request)
    {
        
       $categorias = new categorias();
        $categorias->catenom = $request->input('catenom');
        
        $categorias->save();

      return redirect()->route('categorias.index');


    }

    //Route::resource('/categorias','CategoriasController');
    public function show(categorias $categoria)
    {
      $categorias = $categoria;
      //return $categorias;
     return view('categ.show', compact('categorias')); 

           }

    public function edit(categorias $categoria)
    {
      $categorias = $categoria;

        return view('categ.edit',compact('categorias'));
    }



    
    public function update(Request $request, categorias $categoria)
    {
      $categorias = $categoria;
      $categorias->fill($request->all()); 
      $categorias->save();
       //return 'Actualizado';
      return redirect()->route('categorias.show',[$categorias])->with('status','Se actualizo correctamente');
    }



    public function destroy(categorias $categoria)
    {
      $categorias = $categoria;
        $categorias->delete();
        return redirect()->route('categorias.index');
    }
}
