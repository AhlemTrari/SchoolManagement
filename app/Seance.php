<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    public function module()
    {
        return $this->belongsTo('App\Module','module_id');
    }

    public function groupe()
    {
        return $this->belongsTo('App\Groupe','groupe_id');
    }

    
    public function absences()
    {
    	return $this->hasMany('App\Absence');
    }
}
