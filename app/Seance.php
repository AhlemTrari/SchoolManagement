<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    public function groupe()
    {
        return $this->belongsTo('App\Groupe');
    }
}
