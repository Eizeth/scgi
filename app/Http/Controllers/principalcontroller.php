<?php 
 
namespace bodega\Http\Controllers;

use Illuminate\Http\Request;
use bodega\promocion; 
use bodega\Http\Requests\StorePromocionRequest;


class principalcontroller extends Controller
{
    
    public function index(Request $request)
    { 
      $promocion = Promocion::all(); 

       return view('promo.mostrarpromo', compact('promocion'));
    }
 

    public function create()
    {
    
        return view('promo.altapromo');
        

    }

    //////////////////////////////////// ALMACENAR
    public function store(StorePromocionRequest $request)
    {
        $promocion = new Promocion();
        $promocion->ptema = $request->input('ptema');
        $promocion->pcosto = $request->input('pcosto');
        $promocion->pfecha = $request->input('pfecha');
        $promocion->pnsesion = $request->input('pnsesion');
        $promocion->pdet = $request->input('pdet');
        $promocion->save();

        return redirect()->route('principal.index');
    }


    public function show(Promocion $principal){
      //$promocion = promocion::find($id);
      // return $promocion;

      $promocion = $principal;
      return view ('promo.show', compact('promocion'));
    }


    //                    Modelo     $solicitud, por ejemplo aquí es principal  (Route::resource('/principal', 'principalcontroller');)
    public function edit( Promocion $principal)
    {
      $promocion = $principal; //le dejo eso para que en tu vista ya notengas que cambiar donde dice promocion por principal
      return view('promo.edit', compact('promocion'));
      // dd($principal);
    }

   
    public function update( Request $request, Promocion $principal)
    {
     
       $promocion->fill($request->all());
       $promocion->save();
       //return 'Actualizado';
      return redirect()->route('principal.show',[$principal])->with('status','Se actualizo correctamente');
    }

    
    public function destroy(Promocion $promocion)
    {
        $promocion->delete();
         return redirect()->route('principal.index');
    }
}
   