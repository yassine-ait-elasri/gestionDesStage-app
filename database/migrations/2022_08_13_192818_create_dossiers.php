<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->string('numero');
            $table->primary('numero');
            $table->unsignedbigInteger('id_stagaire')->nullable();
            $table->unsignedbigInteger('id_encadrants')->nullable();
            $table->unsignedbigInteger('id_responsables')->nullable();
            $table->string('theme')->nullable();
            $table->string('etat')->nullable();
            $table->date('date_reception')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('OK_CD')->nullable();
            $table->foreign('id_stagaire')->references('id')->on('stagaires');
            $table->foreign('id_encadrants')->references('id')->on('encadrants');
            $table->foreign('id_responsables')->references('id')->on('users');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossiers');
    }
};
