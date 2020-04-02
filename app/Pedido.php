<?php

namespace bodega;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model{
    protected $fillable = ['userid', 'idsucursal', 'productos', 'estado', 'solicitado', 'entregado'];
}
