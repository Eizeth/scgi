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


    public function store(Request $request)
    {
        
       $categorias = new Categorias();
        $categorias->catenom = $request->input('catenom');
        
        $categorias->save();

      return redirect()->route('categorias.index');


    }

    //Route::resource('/categorias','CategoriasController');
    public function show(categorias $Categorias)
    {
     
      //return $categorias;
      return view('categ.show', compact('Categorias')); 

           }

    public function edit(categorias $categorias)
    {

        return view('categ.edit',compact('categorias'));
    }



    
    public function update(Request $request, categorias $categorias)
    {
      $categorias->fill($request->all()); 
      $categorias->save();
       //return 'Actualizado';
      return redirect()->route('categorias.show',[$categorias])->with('status','Se actualizo correctamente');
    }



    public function destroy(categorias $categorias)
    {
        $categorias->delete();
        return redirect()->route('categorias.index');
    }
}
