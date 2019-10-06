<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquet extends Model
{
    public function module()
    {
        return $this->belongsTo('App\Module');
    }
   public function etudiants()
    {
        return $this->belongsToMany('App\Etudiant');
    }
}
