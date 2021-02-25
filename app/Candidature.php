<?php

namespace app;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    public $guarded = [];


    public function nombre() /// nombre de candidature par offre
    {
        return DB::table('candidatures')->selectRaw('job_id, count(*) as nb_candidature')->groupBy('job_id')->orderBy('job_id');
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo('app\User');
    }

    public function job()
    {
        return $this->belongsTo('app\Jobs');
    }

    public function coverletter()
    {
        return $this->hasOne('app\CoverLetter');
    }
}
