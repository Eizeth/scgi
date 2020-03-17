<?php

namespace bodega;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    
    protected $primaryKey = 'idcate';
    protected $fillable = ['catenom'];

    public function getRouteKeyName()
{
   return 'slug';
}
	 
}
