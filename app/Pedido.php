<?php

namespace bodega;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model{
    public $primaryKey = "idpedido";
    public $timestamps = false;
    protected $fillable = ['userid', 'idsucursal', 'productos', 'estado', 'solicitado', 'entregado'];
}
