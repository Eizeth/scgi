<?php 
 
namespace bodega\Http\Controllers;

use Illuminate\Http\Request;
use bodega\Promocion;

class principalcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
      $promocion = Promocion::all();

       return view('promo.index', compact('promocion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('promo.altapromo');
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promocion $promocion)
    {
       //return view ('promo.show', compact('promocion'));
    }

    /**
     * Show the form for editing the specified resource. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promocion $promocion)
    {

     return $promocion;
    // return view('promo.edit', compact('promocion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promocion $promocion)
    {
       
      $promocion->save();
       //return 'Actualizado';
      return redirect()->route('principal.show',[$promocion])->with('status','Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
