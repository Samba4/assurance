<?php

use Carbon\Carbon;
use App\User;
use App\Categorie;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create('fr_FR');
        for ($i = 1; $i <= 450; $i++) {
            $faker = Faker::create('app\Article');
            DB::table('articles')->insert([
                'categorie_id' => Categorie::all()->random()->id,
                'user_id' => User::all()->random()->id,
                'image' => '/image/EET1Ls17uJTq9HICLyIqq8GAaGsXEumPOaLTZbtw.png',
                'titre' => $faker->sentence(2, true),
                'texte' => $faker->paragraph(20, true),
                'clicks' => '0',
                'created_at' => $faker->dateTimeBetween('-4 months', 'now', null),
            ]);
        }
    }
}
