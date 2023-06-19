<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients_2', function (Blueprint $table) {
            $table->id();
            $table->string('societe');
            $table->string('nom');
            $table->string('prenom');
            $table->string('id_nom_domaine');
            $table->timestamps();

            $table->foreign('id_nom_domaine')->references('nom_domaine')->on('noms_de_domaine_2')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients_2');
    }
};
