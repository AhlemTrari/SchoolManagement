<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function groupes()
    {
        return $this->belongsToMany('App\Groupe');
    }

    public function seances()
    {
    	return $this->hasMany('App\Seance');
    }
}
