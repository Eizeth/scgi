<?php

namespace bodega\Http\Controllers;

use bodega\Categorias;
use Illuminate\Http\Request;
use bodega\Http\Requests\StoreCategoriaRequest;

class CategoriasController extends Controller
{
   
    public function index()
    {
     $categoria = Categorias::all();

       return view('categ.index', compact('categoria'));
    }

 


    public function create()
    {
        return view('categ.create');
    }

    


    public function store(StoreCategoriaRequest $request)
    {
        
       $categoria = new Categorias();
 
       $categoria->catenom = $request->input('catenom');
       $categoria->slug = $request->input('slug');

       $categoria->save();

      return redirect()->route('categorias.index');


    }


    public function show(categorias $categorias)
    {
      
     // return $categoria;

    return view('categ.edit', compact('categorias')); 

           }

    public function edit(categorias $categorias)
    {

        return view('categ.edit',compact('categorias'));
    }



    
    public function update(Request $request, categorias $categorias)
    {
       
      $categoria->save();
       //return 'Actualizado';
      return redirect()->route('categorias.show',[$categoria])->with('status','Se actualizo correctamente');
    }



    public function destroy(categorias $categorias)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
