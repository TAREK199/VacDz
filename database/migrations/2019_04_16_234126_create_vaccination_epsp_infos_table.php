<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccinationEpspInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccination_epsp_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vaccination_epsp_id');
            $table->unsignedInteger('vaccin_id');
            $table->string('num_lot');
            $table->boolean('type_vaccin');
            $table->date('date_production');
            $table->date('date_peremption');
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
        Schema::dropIfExists('vaccination_epsp_infos');
    }
}
