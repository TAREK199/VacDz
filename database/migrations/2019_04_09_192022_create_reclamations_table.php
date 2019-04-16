<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vaccination_id');
            $table->date('date_declaration');
            $table->integer('delait_apparition_symptomes');
            $table->date('date_enquete');
            $table->tinyInteger('abces_point_injection');
            $table->tinyInteger('lymphondinit_liee_bcg');
            $table->tinyInteger('reaction_local_grave');
            $table->float('fievre_valeur');
            $table->tinyInteger('fievre');
            $table->tinyInteger('anaphylaxie');
            $table->tinyInteger('choc_toxique');
            $table->tinyInteger('paralise_flasque_aigue');
            $table->tinyInteger('ancephalopathies_encephalite_meningiet');
            $table->tinyInteger('convultion');
            $table->unsignedInteger('vaccin_suspect');
            $table->tinyInteger('traitement');
            $table->string('traitement_type');
            $table->tinyInteger('hospitalisation');
            $table->string('hospital');
            $table->tinyInteger('deces');
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
        Schema::dropIfExists('reclamations');
    }
}
