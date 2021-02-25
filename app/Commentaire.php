<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($commentaire) {
            $commentaire->user_id = auth()->id();
        });

        static::saving(function ($commentaire) {
            $commentaire->user_id = auth()->id();
        });

        static::updating(function ($commentaire) {
            $commentaire->user_id = auth()->id();
        });
    }

    public function user()
    {
        return $this->belongsTo('app\User');
    }
    public function article()
    {
        return $this->belongsTo('app\Article');
    }
}
