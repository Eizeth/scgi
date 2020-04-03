<?php 
 
namespace bodega\Http\Controllers;

use Illuminate\Http\Request;
use bodega\Promocion; 
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

   
    public function show( Promocion $promocion)
    {  
     //$promocion = promocion::find($id);
    // return $promocion;

  // return view ('promo.show', compact('promocion'));
      var_dump($promocion);
    }

    
    public function edit( Promocion $promocion)
    {
         //  $promocion = promocion::find($id);
   return view('promo.edit', compact('promocion'));

    }

   
    public function update( Request $request, Promocion $promocion)
    {
     
       $promocion->fill($request->all());
       $promocion->save();
       //return 'Actualizado';
      return redirect()->route('principal.show',[$promocion])->with('status','Se actualizo correctamente');
    }

    
    public function destroy(Promocion $promocion)
    {
        $promocion->delete();
         return redirect()->route('principal.index');
    }
}
   