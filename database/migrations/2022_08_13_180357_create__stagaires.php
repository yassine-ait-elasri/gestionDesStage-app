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
        Schema::create('Stagaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('CIN')->nullable();
            $table->string('addresse')->nullable();
            $table->string('gmail')->nullable();
            $table->string('tel')->nullable();
            $table->string('date_prevue_du_stage')->nullable();
            $table->string('specialite')->nullable();
            $table->string('niveau')->nullable(); 
            $table->string('id_service')->nullable();
            $table->foreign('id_service')->references('id_service')->on('services'); 
            $table->string('etablissement')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Stagaires');
    }
};
