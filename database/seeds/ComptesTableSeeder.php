<?php

use app\User;
use app\Compte;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class ComptesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compte::create([
            'id' => '1',
            'user_id' => '1',
            'titre' => null,
            'description' => null,
            'url' => null,
            'created_at' => Carbon::now(),
        ]);

        $faker = FakerFactory::create('fr_FR');
        for ($i = 1; $i <= 10; $i++) {
            $faker = Faker::create('app\Compte');
            DB::table('comptes')->insert([
                'user_id' => User::all()->random()->id,
                'titre' => null,
                'description' => null,
                'url' => null,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
