<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = [
        'id', 'user_id', 'titre', 'description', 'url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
