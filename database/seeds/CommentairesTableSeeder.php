<?php

use Carbon\Carbon;
use app\User;
use app\Article;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;


class CommentairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create('fr_FR');
        for ($i = 1; $i <= 1200; $i++) {
            $faker = Faker::create('app\Commentaire');
            DB::table('commentaires')->insert([
                'user_id' => User::all()->random()->id,
                'article_id' => Article::all()->random()->id,
                'contenu' => $faker->paragraph(1, true),
                'created_at' => $faker->dateTimeBetween('-18 hours', 'now', null)
            ]);
        }
    }
}
