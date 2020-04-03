<?php

namespace bodega;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
      
    protected $table = "promocions";
      protected $primaryKey = 'idpromo';
	protected $fillable = ['ptema', 'pcosto', 'pfecha', 'pnsesion', 'pdet'];

//public function getRouteKeyName()
//{
//}


}


