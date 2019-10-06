<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function etudiants()
    {
    	return $this->hasMany('App\Etudiant');
    }

    public function profs()
    {
    	return $this->belongsToMany('App\Enseignant');
    }

    public function modules()
    {
        return $this->belongsToMany('App\Module','module_groupes');
    }


public function module_groupes()
{
    return $this->hasMany('App\ModuleGroupe');
}

    public function seances()
    {
        return $this->hasMany('App\Seance');
    }


}
