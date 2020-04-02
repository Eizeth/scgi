<?php

namespace bodega;

use Illuminate\Database\Eloquent\Model;

class Encargados extends Model
{
    protected $primaryKey = 'idencargado';
    protected $fillable = ['nom','app', 'apm','tel'];

}
