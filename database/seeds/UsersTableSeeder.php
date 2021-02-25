<?php

use app\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as FakerGenerator;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom' => 'Coulibaly',
            'prenom' => 'Samba',
            'username' => 'petithulk',
            'email' => 'samba9674@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('samba'),
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        $faker = FakerFactory::create('fr_FR');
        for ($i = 1; $i <= 10; $i++) {
            $faker = Faker::create('App\User');
            DB::table('users')->insert([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'username' => $faker->unique()->userName,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'password' => bcrypt('faker'), // secret
                'remember_token' => Str::random(10)
            ]);
        }
    }
}
