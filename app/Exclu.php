<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exclu extends Model
{
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant','etudiant_id');
    }

	public function module()
    {
        return $this->belongsTo('App\Module','module_id');
    }
}
