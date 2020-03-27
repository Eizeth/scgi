<?php

namespace bodega;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $primaryKey = 'idprod';
	 protected $fillable = ['cod','nom','cate', 'neto','cant','stock','imagen'];

// public function getRouteKeyName()
// {
//    return 'slug';
// }

}
