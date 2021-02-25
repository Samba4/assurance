<?php

namespace app;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'username', 'email', 'password', 'provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function compte()
    {
        return $this->hasOne('app\Compte');
    }

    public function isOwn()
    {
        return false;
    }

    public function jobs()
    {
        return $this->hasMany('app\Jobs');
    }

    public function annonces()
    {
        return $this->hasMany('app\Annonce');
    }

    public function candidature()
    {
        return $this->hasMany('app\Candidature');
    }

    public function likes()
    {
        return $this->belongsToMany('app\Jobs');
    }

    public function commentaires()
    {
        return $this->hasMany('app\Commentaire');
    }

    public function articles()
    {
        return $this->hasMany('app\Article');
    }
}
