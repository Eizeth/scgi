<?php

namespace bodega;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user(){
    	return $this->belongsToMany('bodega\User');
    	
    }
}


