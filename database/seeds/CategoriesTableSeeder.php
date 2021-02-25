<?php

use app\Categorie;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as FakerGenerator;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
            'name' => 'Après le BTS',
            'slug' => 'apres_bts',
        ]);

        Categorie::create([
            'name' => 'Equipes éducatives',
            'slug' => 'equipes_educatives',
        ]);

        Categorie::create([
            'name' => 'Assurance automobile',
            'slug' => 'assurance_automobile',
        ]);

        Categorie::create([
            'name' => 'Assurance habitation',
            'slug' => 'assurance_habitation',
        ]);

        Categorie::create([
            'name' => 'Assurance vie',
            'slug' => 'assurance_vie',
        ]);

        Categorie::create([
            'name' => 'Contrat d\'assurance',
            'slug' => 'Contrat_dassurance',
        ]);

        Categorie::create([
            'name' => 'Santé',
            'slug' => 'sante',
        ]);

        Categorie::create([
            'name' => 'Retraite',
            'slug' => 'retraite',
        ]);

        Categorie::create([
            'name' => 'Responsabilité Civile',
            'slug' => 'responsabilité_civile',
        ]);
    }
}
