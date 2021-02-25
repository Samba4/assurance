<?php

namespace App\Repositories;

use App\Models\Categorie;

class CategorieRepository extends BaseRepository
{
    public function __construct(Categorie $categorie)
    {
        $this->model = $categorie;
    }
}
