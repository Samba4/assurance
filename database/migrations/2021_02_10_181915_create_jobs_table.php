<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('intitule');
            $table->string('entreprise');
            $table->string('entreprise_mail');
            $table->text('description_entreprise')->nullable();
            $table->string('job_lieu');
            $table->string('entreprise_adresse');
            $table->string('postale');
            $table->string('ville');
            $table->string('departement');
            $table->string('pays')->default('France');
            $table->text('profil')->nullable();
            $table->text('description');
            $table->text('aspect')->nullable();
            $table->string('type');
            $table->string('disponibilite');
            $table->string('diplome')->nullable();
            $table->unsignedBigInteger('salaire');
            $table->boolean('status')->default(1);
            $table->text('attachment')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
