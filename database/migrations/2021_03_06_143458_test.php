<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Test extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('essences_feuillues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('essence');
            $table->timestamps();
        });
        Schema::create('essences_resineuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('essence');
            $table->timestamps();
        });
        Schema::create('circonference', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('circonference');
            $table->timestamps();
        });
        Schema::create('volume', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('volume');
            $table->timestamps();
        });
        Schema::create('annee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('annee');
            $table->timestamps();
        });
        Schema::create('qualite', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('qualite');
            $table->timestamps();
        });
        Schema::create('operation_gestion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('operation_gestion');
            $table->timestamps();
        });
        Schema::create('type_produit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_produit');
            $table->timestamps();
        });
        Schema::create('mode_vente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mode_vente');
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
        //
    }
}
