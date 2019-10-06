<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function enseignants()
    {
        return $this->hasMany('App\Enseignant');
    }

    public function groupes()
    {
        return $this->belongsToMany('App\Groupe');
    
    }
    
public function module_groupes()
{
    return $this->hasMany('App\ModuleGroupe');
}

    public function seances()
    {
    	return $this->hasMany('App\Seance');
    }

    public function absences()
    {
        return $this->hasMany('App\Absence');
    }
    public function exclus()
    {
        return $this->hasMany('App\Exclu');
    }

}
