<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string("libelle");
            $table->string("couppref");
            $table->integer("ptsdevie");
        });

        Schema::update('classes', function (Blueprint $table) {
            Schema::rename("coup pref", "couppref");

            Schema::rename("pts de vie", "vie");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
