<?php

use app\Jobs;
use app\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app\Jobs::create([
            'id' => '1',
            'user_id' => '1',
            'intitule' => 'Développeur front-end Vue.js H/F',
            'entreprise' => 'QSmart',
            'entreprise_mail' => 'QSmart@gmail.com',
            'description_entreprise' => 'Qsmart fait partie du groupe DHB, il est constitué d\'une équipe de 16 développeurs, 3 lead dev et 3 chefs de projets techniques.Suite à un accroissement durable d\'activité nous recherchons de nouveaux collaborateurs pour étoffer notre équipe.',
            'job_lieu' => 'Les employés seront rattachés à l\'adresse de l\'entreprise.',
            'entreprise_adresse' => '40 Rue des Aciéries',
            'postale' => '42000',
            'ville' => 'SAINT-ETIENNE',
            'departement' => 'Loire',
            'pays' => 'France',
            'profil' => 'Le profil recherché est un profil développeur Front. De très bonnes connaissances en HMTL, CSS, JavaScript et notamment le framework Vue.js sont attendues.',
            'description' => 'La connaissance de GraphQL, Bootstrap, Semantic UI, MySQL seraient un plus indéniable. Enfin une connaissance, même légère, de AWS pourrait permettre de s\'intégrer plus rapidement dans le premier projet auquel vous participerez, ainsi qu\'une connaissance du framework Symfony pour les projets futurs.Dans un premier temps vous intégrerez une équipe dédiée à un projet piloté en méthode agile, une connaissance de cette méthode serait donc un plus.',
            'aspect' => null,
            'type' => 'Contrat à durée indeterminée',
            'disponibilite' => 'Immédiat',
            'diplome' => 'Pas necessaire',
            'salaire' => '4300',
            'attachment' => null,
        ]);

        $faker = FakerFactory::create('fr_FR');
        for ($i = 1; $i <= 100; $i++) {
            $faker = Faker::create('App\Jobs');
            DB::table('jobs')->insert([
                'user_id' => User::all()->random()->id,
                'intitule' => $faker->jobTitle,
                'entreprise' => $faker->company,
                'entreprise_mail' => $faker->email,
                'description_entreprise' => $faker->paragraph(8, true),
                'job_lieu' => 'Les employés seront rattachés à l\'adresse de l\'entreprise.',
                'entreprise_adresse' => $faker->address,
                'postale' => $faker->postcode,
                'ville' => $faker->city,
                'departement' => $faker->state,
                'pays' => 'France',
                'profil' => $faker->paragraph(8, true),
                'description' => $faker->paragraph(8, true),
                'aspect' => null,
                'type' => 'Contrat à durée indeterminée',
                'disponibilite' => 'Immédiatement',
                'diplome' => 'Sans diplôme',
                'salaire' => $faker->numberBetween($min = 1554, $max = 7000),
                'status' => 1,
                'attachment' => null,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
