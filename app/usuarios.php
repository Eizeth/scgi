<?php

namespace bodega;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    //
    use SoftDeletes;
   protected $primaryKey = 'idu';  
   protected $fillable=['idu','nombre','correo','tipo','user','pasw'];
   
   protected $date=['deleted_at'];
}
