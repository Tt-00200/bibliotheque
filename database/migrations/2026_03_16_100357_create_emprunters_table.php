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
        Schema::create('emprunters', function (Blueprint $table) {
            $table->id();
            $table->date("date_emprunt");
            $table->date("date_retour_reel")->nullable;
            $table->date("date_retour_prevu");
            $table->boolean("suivi")->comment("0=en cours,1=retourne");
            $table->foreignId("membre_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("exemplaire_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprunters');
    }
};
