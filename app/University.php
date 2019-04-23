<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected $table='university';
    public function city()
    {
         return $this->belongsTO('App\City');
    }
}
