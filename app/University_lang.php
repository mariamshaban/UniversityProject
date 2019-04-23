<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University_lang extends Model
{
    //

    protected $table='university_lang';
    public function Lang()
    {
        return $this->belongsTO('App\Language','lang_id','id');
    }
}
