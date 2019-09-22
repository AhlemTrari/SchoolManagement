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
}
