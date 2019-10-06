<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant','etudiant_id');
    }


    public function seance()
    {
        return $this->belongsTo('App\Seance','seance_id');
    }
    
    public function module()
    {
        return $this->belongsTo('App\Module','module_id');
    }

}
