<?php

namespace App;

use app\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];

    // protected $dispatchesEvents = [
    //     'saving' => NameSaving::class,
    // ];

    /**
     * Get the articles.
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
