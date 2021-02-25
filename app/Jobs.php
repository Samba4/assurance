<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{

    public function candidature()
    {
        return $this->hasMany('app\Candidature');
    }

    public function scopeOnline($query)
    {
        return $query->where('status', 1);
    }
    public function user()
    {
        return $this->belongsTo('app\User');
    }

    public function likes()
    {
        return $this->belongsToMany('app\Jobs');
    }
}
