<?php

namespace App;

use App\User;
use App\Categorie;
use app\Commentaire;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function path()
    {
        return "/article/{$this->slug}";
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function user()
    {
        return $this->belongsTo('app\User');
    }

    /**
     * Un article possèdent 0 ou plusieurs commentaires
     */

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class)->latest();
    }

    public function scopeLatestWithUser($query)
    {
        $user = auth()->user();

        if ($user) {
            return $query->with('user')->latest();
        }

        return $query->with('user');
    }

    public function recents()
    {
        return DB::SELECT('SELECT * FROM articles ORDER BY created_at DESC LIMIT 3');
    }
}
