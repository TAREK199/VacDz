<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfants', function (Blueprint $table) {
            $table->integer('id')->primary();//num_etat_civiles
            $table->string('nom');
            $table->string('prenom');
            $table->boolean('sex');
            $table->text('observation');
            $table->unsignedInteger('pere_id');
            $table->date('date_naissance');
            $table->string('lieu_naissance');//
            $table->unsignedInteger('commune_id');
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
        Schema::dropIfExists('enfants');
    }
}
