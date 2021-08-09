<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->id();
            $table->string("Pseudo");
            $table->integer("idClasse");
            $table->integer("idArmure");
            $table->integer("idRace");
            $table->integer("idCompte");
            $table->integer("idSpecialisation");
            $table->integer("updated_at");
            $table->integer("created_at");
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnages');
    }
}
