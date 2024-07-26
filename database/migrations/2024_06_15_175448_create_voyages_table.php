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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ville_depart_id')->nullable();
            $table->unsignedBigInteger('ville_arrivee_id')->nullable();
            $table->date('date');
            $table->time('heure_depart');
            $table->time('heure_arrivee');
            $table->integer('prix');
            $table->timestamps();

            $table->foreign('ville_depart_id')->references('id')->on('villes')->onDelete('set null');
            $table->foreign('ville_arrivee_id')->references('id')->on('villes')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
