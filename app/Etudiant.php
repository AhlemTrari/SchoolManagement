<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{
     use Notifiable;
    protected $guard = 'etudiant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['matricule','email', 'nom', 'prenom', 'password','date_naissance'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groupe()
    {
        return $this->belongsTo('App\Groupe','groupe_id');
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
