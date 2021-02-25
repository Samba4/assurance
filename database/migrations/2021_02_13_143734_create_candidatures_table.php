<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone')->nullable();
            $table->string('ville');
            $table->text('content')->nullable();
            $table->text('attachment')->nullable();
            $table->boolean('validated')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('job_id')->references('id')->on('jobs')->cascadeOnDelete();
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
        Schema::dropIfExists('candidatures');
    }
}
