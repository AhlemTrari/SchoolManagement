<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Enseignant extends Authenticatable
{
 use Notifiable;
    protected $guard = 'enseignant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'nom', 'prenom','photo' , 'password','date_naissance','num_tel'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function module()
    {
        return $this->belongsTo('App\Module','module_id');
    }
}
