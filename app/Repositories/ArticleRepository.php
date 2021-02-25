<?php

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class ArticleRepository
{
    public function store($data)
    {
        // Save lecon
        $path = $data['image']->store('image', 'public');

        // Save thumb
        $article = InterventionImage::make(public_path($path))->resize(600, 600);
        $article->save();

        // Save in base
        $article = new Article();
        $article->titre = $data['titre'];
        $article->texte = $data['texte'];
        $article->image = $path;
        $article->categorie_id = $data['categorie_id'];
        request()->user()->articles()->save($article);
    }
    public function getAllArticles()
    {
        return Article::latestWithUser()->paginate(8);
    }

    public function getArticlesForUser($id)
    {
        return Article::latestWithUser()->whereHas('user', function ($query) use ($id) {
            $query->whereId($id);
        })->paginate(config('app.pagination'));
    }
}
