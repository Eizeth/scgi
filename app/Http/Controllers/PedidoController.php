<?php

namespace bodega\Http\Controllers;

use bodega\Pedido;
use bodega\producto;
use bodega\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller{
    public function index(){
        $productos = producto::all();
        $pedidos = Pedido::all()->where("estado", 0);
        if (Auth::user()->roleid == 1) {
            foreach ($pedidos as $pedido) {
                $pedido->productos = json_decode($pedido->productos);
                foreach ($pedido->productos as $producto) {
                    $producto->detail = producto::find($producto->id);
                }
                $pedido->user = User::find($pedido->userid);
            }
            return view('pedido.pendientes', compact('pedidos'));
        } else return view('pedido.productos', compact('productos'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $pedido = new Pedido();
        $pedido->userid = $request->userId;
        $pedido->productos = json_encode($request->products);
        $pedido->estado = 0;
        $pedido->solicitado = $request->date;
        $pedido->save();
        // echo(json_encode($request->products));
        return("stored");
    }

    public function show(Pedido $pedido){
        //
    }

    public function edit(Pedido $pedido){
        //
    }

    public function update(Request $request, Pedido $pedido){
        // var_dump($pedido);
        $pedido = Pedido::find($pedido->idpedido);
        foreach (json_decode($pedido->productos) as $p) {
            var_dump($p);
            $producto = producto::find($p->id);
            $producto->stock = $producto->stock - $p->cantidad;
            $producto->save();
        }
        $pedido->estado = 1;
        $pedido->entregado = date("Y-m-d");
        $pedido->save();
        return redirect()->route('pedido.index')->with('status','Se entregó el producto');
    }

    public function destroy(Pedido $pedido){
        //
    }
}
