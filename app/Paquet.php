<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquet extends Model
{
    public function module()
    {
        return $this->belongsTo('App\Module');
    }
   public function groupes()
    {
        return $this->belongsToMany('App\Groupe');
    }
}
