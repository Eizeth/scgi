<?php

namespace bodega;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $primaryKey = 'idsuc';
	 protected $fillable = ['snom','sencar','sdir', 'stel'];
}
